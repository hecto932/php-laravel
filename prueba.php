<?php 

require_once 'vendor/autoload.php';

$user = new \PlatziPHP\Author('fakemail@hola.com','1234');

$user->setName('Hector', 'Flores');

echo $user->getFirstName();
echo $user->getLastName();
echo PHP_EOL;

//var_dump($user);


?>