<?php
namespace App\Classes;
class Suite
{

    /**
     * Rest object
     *
     * @var string
     */
    private $rest_url = "";
    /**
     * SugarCRM User
     *
     * @var string
     */
    private $rest_user = "";
     /**
     * SugarCRM Pass
     *
     * @var string
     */
    private $rest_pass = "";

     /**
         * SugarCRM Session ID
         *
         * @var string
         */
    protected $sid = null;

    public function __construct()
    {
        $sugar_url =   config('suitecrm.url');
        $this->rest_url =  $sugar_url."/service/v4_1/rest.php";
        $this->base_url = 'http://' . preg_replace('~^http://~', '', $sugar_url);
        $this->rest_user =  config('suitecrm.username');
        $this->rest_pass =  config('suitecrm.password');
    }

    private function rest_request($call_name, $call_arguments)
    {
        ob_start();
        $ch = curl_init();
        $post_data = array(
                          'method' => $call_name,
                          'input_type' => 'JSON',
                          'response_type' => 'JSON',
                          'rest_data' => json_encode($call_arguments)
              );
        curl_setopt($ch, CURLOPT_URL, $this->rest_url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $output = curl_exec($ch);
        $response_data = json_decode($output, true);
        curl_close($ch);
        ob_end_flush();
        return $response_data;
    }

          /**
         * Login with user credentials
         *
         * @param string $user
         * @param string $password_hash
         * @param boolean $admin_check
         * @return boolean
         */
    public function login()
    {
        $login_params = array(
              'user_name' => $this->rest_user,
              'password'  => md5($this->rest_pass),
          );

        $result = $this->rest_request('login', array(
              'user_auth' => $login_params,
        "application_name" => "",
              'name_value_list' => array(array('name' => 'notifyonsave', 'value' => 'true'))
          ));
        if (isset($result['id'])) {
            $this->sid = $result['id'];

            return $this->sid;
        } elseif (isset($result['name'])) {
            return false;
        }
        return false;
    }

          /**
         * Logout
         */
    public function logout()
    {
        $this->rest_request('logout', array(
            'session'    => $this->sid,
        ));
        $this->sid = null;
    }

    public static function display()
    {
        return true;
    }

  /**
     * Retrieves a list of entries
     *
     * @param string $module
     * @param query $query
     * @param string $order_by
     * @param integer $offset
     * @param array $select_fields
     * @param integer $max_results
     * @param boolean $deleted
     * @return array
     */
    public function getEntryList($sid,$module, $query = '', $order_by = '', $offset = 0, $select_fields = array(), $related_fields = array(), $max_results = '0', $deleted = false)
    {
        if (!$sid) {
            return false;
        }

        $result = $this->rest_request('get_entry_list', array(
            'session'        => $sid,
            'module_name'    => $module,
            'query'            => $query,
            'order_by'        => $order_by,
            'offset'        => $offset,
            'select_fields'    => $select_fields,
            'link_name_to_fields_array' => $related_fields,
            'max_results'    => $max_results,
            'deleted'        => $deleted,
        ));

        if ($result['result_count'] > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getEntry($sid,$module, $id, $select_fields = array(), $related_fields = array())
    {
        
        if (!$sid) {
            return false;
        }
        $result = $this->rest_request('get_entry', array(
            'session'        => $sid,
            'module_name'    => $module,
            'id'            => $id,
            'select_fields'    => $select_fields,
            'link_name_to_fields_array' => $related_fields,
        ));

        if (!isset($result['result_count']) || $result['result_count'] > 0) {
            return $result;
        } else {
            return false;
        }
    }

    /**
     * Adds or changes an entry
     *
     * @param string $module
     * @param array $data
     * @return array
     */
    public function setEntry($sid,$module, $data)
    {
        if (!$sid) {
            return false;
        }

        $result = $this->rest_request('set_entry', array(
            'session'            => $sid,
            'module_name'        => $module,
            'name_value_list'    => $data,
        ));

        return $result;
    }

    /**
     * Creates a new relationship-entry
     *
     * @param string $module1
     * @param string $module1_id
     * @param string $module2
     * @param string $module2_id
     * @return array
     */
    public function setRelationship($sid,$module1, $module1_id, $module2, $module2_id)
    {
        if (!$sid) {
            return false;
        }

        $data = array(
            'session'    => $sid,
            'module_name' => $module1,
            'module_id'    => $module1_id,
            'link_field_name' => $module2,
            '$related_ids'=> array($module2_id),
        );

        $result = $this->rest_request('set_relationship', $data);
       
        return $result;
    }

    /**
     * Retrieves relationship data
     *
     * @param string $module_name
     * @param string $module_id
     * @param string $related_module
     * @return array
     */
    public function getRelationships($sid,$module_name,$module_id,$related_module, $related_module_query = '', $related_fields = array(), $related_module_link_name_to_fields_array = array(), $deleted = false, $order_by = '', $offset = 0, $limit = false)
    {

        if (!$sid) {
            return false;
        }

        $result = $this->rest_request('get_relationships', array(
            'session' => $sid,
            'module_name' => $module_name,
            'module_id'    => $module_id,
            'link_field_name' => $related_module,
            'related_module_query' => $related_module_query,
            'related_fields' => $related_fields,
            'related_module_link_name_to_fields_array' => $related_module_link_name_to_fields_array,
            'deleted' => $deleted,
            'order_by' => $order_by,
            'offset' => $offset,
            'limit' => $limit,
        ));
        if (!isset($result['error']['number']) || $result['error']['number'] == 0) {
            return $result;
        } else {
            return false;
        }
    }

        /**
     * Retrieves a module field
     *
     * @param string $module
     * @param string $field
     * @return field
     */
    public function getModuleFields($sid,$module, $field)
    {
        if (!$sid) {
            return false;
        }

        $result = $this->rest_request('get_module_fields', array(
            'session'        => $sid,
            'module_name'        => $module,
        ));

        

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getAllModuleFields($sid,$module)
    {
        if (!$sid) {
            return false;
        }

        $result = $this->rest_request('get_module_fields', array(
            'session'        => $sid,
            'module_name'        => $module,
        ));

        if ($result > 0) {
            return $result['module_fields'];
        } else {
            return false;
        }
    }

    public function get_note_attachment($sid,$note_id)
    {
        if (!$sid) {
            return false;
        }

        $call_arguments = array(
            'session' => $sid,
            'id' => $note_id
            );

        $result = $this->rest_request(
            'get_note_attachment',
            $call_arguments
        );

        return $result;
    }

    public function set_note_attachment($sid,$note_id, $file_name, $file_location)
    {
        if (!$sid) {
            return false;
        }

        $result = $this->rest_request('set_note_attachment', array(
            'session'                   => $sid,
            'note' => array(
                'id' => $note_id,
                'filename' => $file_name,
                'file' => base64_encode(file_get_contents($file_location)),
            ),
        ));

        return $result;
    }

    public function get_document_revision($sid,$id)
    {
        if (!$sid) {
            return false;
        }

        $result = $this->rest_request('get_document_revision', array(
            'session' => $sid,
            'id'      => $id,
        ));

        return $result;
    }

    public function set_document_revision($sid,$document_id, $file_name, $file_location, $revision_number = 1)
    {
        if (!$sid) {
            return false;
        }

        $result = $this->rest_request('set_document_revision', array(
            'session'            => $sid,
            'document_revision' => array(
                'id' => $document_id,
                'revision' => $revision_number,
                'filename' => $file_name,
                'file' => base64_encode(file_get_contents($file_location)),
            ),
        ));

        return $result;
    }
}
