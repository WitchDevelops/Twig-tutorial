<?php
require 'vendor/autoload.php'; // Composer's autoloader

// Create a Twig environment
$loader = new \Twig\Loader\FilesystemLoader('views');
$twig = new \Twig\Environment($loader);

$request_uri = $_SERVER['REQUEST_URI'];

// basic routing
if ($request_uri === '/') {
    // Render the home page
    echo $twig->render('home.html.twig');
} elseif ($request_uri === '/variables') {
    // Render the page with variables
    echo $twig->render(
        'variables.html.twig',
        array(
            'name' => 'John Doe',
            'age' => 25,
        )
    );
} elseif ($request_uri === '/conditionals') {
    // Render the page with conditionals
    echo $twig->render('conditionals.html.twig', array(
        'name' => 'John Doe',
        'age' => 25,
    )
    );

} elseif ($request_uri === '/loops') {
    // Render the page with loops
    echo $twig->render('loops.html.twig', array(
        'users' => array(
            array('name' => 'Maxine', 'age' => 32, 'role' => 'admin'),
            array('name' => 'Anna', 'age' => 17, 'role' => 'user'),
            array('name' => 'John', 'age' => 58, 'role' => 'user'),
        )
    )
    );

} elseif ($request_uri === "/templates") {
    // Render the page with templates
    echo $twig->render('templates.html.twig'
    );

} else {
    // Handle 404 - Page not found
    http_response_code(404);
    echo $twig->render('404.html.twig');
}