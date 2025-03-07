<?php
	namespace  App\Controllers;

	use App\Middlewares\postulacionesMiddleware,
		Buki\Router\Router,
		Symfony\Component\HttpFoundation\Request,
		Symfony\Component\HttpFoundation\Response,
		Josantonius\Session\Session;
	

	class route{
		private $route;
		private $meta;
		private $ext;
		private $last;


		public function __construct(){

			$this->route =  new Router([
				'paths' => [
				    'controllers' => 'app/controllers',
				    'middlewares' => 'app/middlewares',
				  ],
				'namespaces' => [
				      'controllers' => 'App\Controllers',
				      'middlewares' => 'App\Middlewares',
				  ],
			]);


			$url = $_SERVER["REQUEST_URI"];
			$keys = parse_url($url); // parse the url
			$path = explode("/", $keys['path']); // splitting the path
			$last = end($path); // get the value of the last element
		
			$this->ext = pathinfo($last,PATHINFO_EXTENSION);
			$this->last=$last;

	    }

		public function start(){
			require_once __DIR__.'/../templates/default.php';
		}

		public function pages(){


			//Se requieren todas las rutas automáticamente
			$base = __DIR__.'/../';

			//Se define el folder a incluir
			$folders = [
				'routes'
			];
			//Inclusión automática de los ficheros
			foreach ($folders as $f) {
				foreach (glob($base . "$f/*.php") as $k => $archivo) {
					require_once $archivo;
				}
			}
			$this->route->run();
		}
	
	}


 ?>