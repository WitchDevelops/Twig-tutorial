<?php
require 'vendor/autoload.php'; // Composer's autoloader

// Create a Twig environment
$loader = new \Twig\Loader\FilesystemLoader('views');
$twig = new \Twig\Environment($loader);

// Render a template
echo $twig->render('hello.html', array(
    'name' => 'John Doe',
    'age' => 25,
    'users' => array(
        array('name'=> 'Maxine', 'age' => 32, 'role'=>'admin'),
        array('name'=> 'Anna', 'age' => 17, 'role'=>'user'),
        array('name'=> 'John', 'age' => 58, 'role'=>'user'),

    )
));
