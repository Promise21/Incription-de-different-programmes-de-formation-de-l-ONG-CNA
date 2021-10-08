<?php

/**
 * 
 */
class Routeur
{
	public function __construct()
	{
		spl_autoload_register(function ($class_name) {

			$dirs = 'app/controllers/';
			if (file_exists($dirs . $class_name . '.php')) {
				require_once($dirs . $class_name . '.php');
				return;
			} else {
				echo 'not found :-)';
			}
		});
	}
}
