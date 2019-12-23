<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Classes\Suite;
use Illuminate\Http\Request;

class SuiteCrmAuth extends Controller
{
    /**
     * function to make cURL request
     *
     * @param $method
     * @param $parameters
     * @param $url
     * @return mixed
     */
    public function call($method, $parameters, $url)
    {
        ob_start();
        $curl_request = curl_init();

        curl_setopt($curl_request, CURLOPT_URL, $url);
        curl_setopt($curl_request, CURLOPT_POST, 1);
        curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
        curl_setopt($curl_request, CURLOPT_HEADER, 1);
        curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);

        $jsonEncodedData = json_encode($parameters);

        $post = array(
            "method" => $method,
            "input_type" => "JSON",
            "response_type" => "JSON",
            "rest_data" => $jsonEncodedData
        );

        curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);
        $result = curl_exec($curl_request);
        curl_close($curl_request);

        $result = explode("\r\n\r\n", $result, 2);
        $response = json_decode($result[1]);
        ob_end_flush();

        return $response;
    }

    /**
     * Make a login request trough the suiteCrm api.
     */
    public function Auth()
    {


        $url = config('suitecrm.url');
        $username = config('suitecrm.username');
        $password = config('suitecrm.password');

        die($url);

        //login <------------------------------></------------------------------>
        $login_parameters = array(
            "user_auth" => array(
                "user_name" => $username,
                "password" => md5($password),
                "version" => "1"
            ),
            "application_name" => "RestTest",
            "name_value_list" => array(),
        );

        $login_result = $this->call("login", $login_parameters, $url);
        //get session id
        $session_id = $login_result->id;

        /*echo "<pre>";
        print_r('SessionId '.$session_id);

        echo "<pre>";
        print_r($login_result);
        echo "</pre>";
        */

        return $session_id;
    }

    public function Test()
    {
        $restClient = new \App\Classes\Suite;

        if (! $restClient->login()) {
            return ("Failed to connect to SuiteCRM. Please check your settings.");
        } else {
            return ("Connected with the SuiteCRM.");
        }
    }

}
