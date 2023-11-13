<?php

namespace M2i\Mvc;

use AltoRouter;

class App extends AltoRouter
{
    public function run()
    {
        //Permet de styliser les erreurs
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();

        //permet de recup l'URL actuelle
        $match = $this->match();
        
        
        //lance le controlleur
        if(is_array($match)){
            //tableau où index 0 est controller, index 1 methode
            [$controller, $method] = explode('@', $match['target']); //UserController@list
            $controller = 'M2i\Mvc\Controller\\'.$controller;  
            //car la class ->namespace
            $object = new $controller;
            $object->$method(...$match['params']);
            /// ... permet d'exploser un tableau pour recup ses paramètres
            //notamment pr la méthode show id de user controller
        }
        else {
            //404 si $match retourne false
            http_response_code(404);
            View::render('404');
        }
    }
}