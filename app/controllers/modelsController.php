<?php 


namespace App\Controllers;

class models extends conexion{

	public function __construct(){
		parent::__construct();
	}

	public static function container(){
		return (object)[
			'demo' => new \App\Models\demoModel,
		];
	}
}

