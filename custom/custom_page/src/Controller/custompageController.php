<?php

/** 
	* @file 
	* @author Rohit Rajput 
	* Contains \Drupal\custom_page\Controller\custompageController 
*/

namespace Drupal\custom_page\Controller;

use Drupal\Core\Controller\ControllerBase;

/** 
	* Provides route responses for the example module. 
*/

class custompageController extends ControllerBase {

	/** 
		* Returns a simple page. 
		* 
		* @return array 
		* A simple renderable array. 
	*/
	public function CustomPage() { 
	$element = array( 
		'#markup' => 'Hello Rohit Rajput This Is Your Custom Page.', 
	); 
		return $element; 
	}
}