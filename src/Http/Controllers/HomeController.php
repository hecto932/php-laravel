<?php 

namespace PlatziPHP\Http\Controllers;

use PlatziPHP\Http\Views\View;
use PlatziPHP\Author;
use PlatziPHP\Post;

class HomeController
{
	public function index($request)
	{
		$author = new Author(
			'hecto932@gmail.com', 
			'12345678',
			'AUTOR_DE_PLATZI'
		);

		$author->setName('Hector', 'Flores');
		
		$posts = [
			new Post($author, 'Post #1', 'This is the first post'),
			new Post($author, 'Post #2', 'This is the second post'),
			new Post($author, 'Post #3', 'This is the third post'),
			new Post($author, 'Post #4', 'This is the fourth post')
		];
		$view = new View('home', ['posts' => $posts ]);
		$response = $view->render();
		//echo "<pre>".print_r($request, true)."</pre>";
		//return "Hello at ".
		//$request->getRequestUri().
		//' from Controller';
	}
}