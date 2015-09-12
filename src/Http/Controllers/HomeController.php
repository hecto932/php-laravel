<?php 

namespace PlatziPHP\Http\Controllers;

class HomeController
{
	public function index($request)
	{
		//echo "<pre>".print_r($request, true)."</pre>";
		return "Hello at ".
		$request->getRequestUri().
		' from Controller';
	}
}