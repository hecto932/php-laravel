<?php 

namespace PlatziPHP\Http\Controllers;

use PlatziPHP\Http\Views\View;

class HomeController
{
	public function index($request)
	{
		$view = new View('home', ['message' => 'Hello from a view!']);
		$response = $view->render();
		//echo "<pre>".print_r($request, true)."</pre>";
		//return "Hello at ".
		//$request->getRequestUri().
		//' from Controller';
	}
}