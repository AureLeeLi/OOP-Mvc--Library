<?php

//autoload des class de composer
require '../vendor/autoload.php';

use M2i\Mvc\App;

$app = new App();

//toutes les routes du site
$app->addRoutes([   
    //méthode POST ou GET, qdon va sur users, utilise cette methode list (@marqueur qui fait la diff entre la class et la méthode, utile pour le explode)
        ['GET', '/', 'HomeController@index'],
        ['GET', '/books', 'BookController@list'],
        ['GET', '/book/[i:id]', 'BookController@show'],//livre cliqué
        ['GET|POST', '/books/create', 'BookController@create'],
        ['GET', '/book/[i:id]/delete', 'BookController@delete'], 
        ['GET|POST', '/book/i:id]/edit', 'BookController@edit'],//recherche par id;
    ]);

// lancer l'application
$app->run();

?>