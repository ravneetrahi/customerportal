<?php
namespace App\Helpers

class Helper {


/**A
 * Converts an Array to a SugarCRM-REST compatible name_value_list
 *
 * @param Array $data
 * @return Array
*/

 function convertArrayToNVL($data)
  {
	  $return = array();
	  foreach ($data as $key => $value )
	 	$return[] = array( 'name' => $key, 'value' => $value );
	  return $return;
  }

    /**
     * Converts a SugarCRM-REST compatible name_value_list to an Array
     *
     * @param Array $data
     * @return Array
     */

  function convertNVLToArray($data){
    $return = array();
    foreach ($data as $row ){
    	$return[$row['name']] = $row['value'];
      }
    return $return;
    }
 }
