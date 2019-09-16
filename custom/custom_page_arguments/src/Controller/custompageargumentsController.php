<?php

/** 
	* @file 
	* @author Rohit Rajput 
	* Contains \Drupal\custom_page_arguments\Controller\custompageargumentsController 
*/

namespace Drupal\custom_page_arguments\Controller;

use Drupal\Core\Controller\ControllerBase;

/** 
	* Provides route responses for the example module. 
*/

class custompageargumentsController extends ControllerBase {

	/** 
		* Returns a simple page. 
		* 
		* @return array 
		* A simple renderable array. 
	*/
	public function CustomPageArguments($count){
       return ['#type' => 'markup',
       			'#markup' => $this->t('You will get %count% discount!!',
       			array('%count' => $count)),
       		];
    }
}