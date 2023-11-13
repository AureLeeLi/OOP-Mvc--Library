<?php

//autoload des class de composer
require '../vendor/autoload.php';

use M2i\Mvc\App;

$app = new App();

//toutes les routes du site
$app->addRoutes([   
    //méthode POST ou GET, qdon va sur users, utilise cette methode list (@marqueur qui fait la diff entre la class et la méthode, utile pour le explode)
        ['GET', '/', 'HomeController@index'],
        ['GET', '/utilisateurs', 'UserController@list'],
        ['GET', '/utilisateurs/[i:id]', 'UserController@show'],//recherche par id -> i = integer;
        ['GET|POST', '/utilisateurs/creer', 'UserController@create'],
        // ['GET|POST', '/utilisateurs/modifier/[i:id]', 'UserController@edit'], 
        // ['GET', '/utilisateurs/supprimer/[i:id]', 'UserController@destroy'],//recherche par id;
        ['GET', '/films', 'MovieController@list'],
    ]);

// lancer l'application
$app->run();

?>