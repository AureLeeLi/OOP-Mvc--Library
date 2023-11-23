<?php

namespace M2i\Mvc;

// La vue concerne l'affichage de nos données. Elle sera responsable d'afficher quelque chose, notre code HTML avec nos données
// La vue va nous permettre de séparer totalement la partie traitement de la partie affichage. La vue se contentera d'afficher les données que le contrôleur lui passe.

class View 
{
    //création d'une méthode d'un rendu HTML sans devoir instancier ::
    public static function render($view, $data = []) 
    //page a render en paramètre, et les datas utilisées sur la vue rendue
    {
        if(!file_exists('../views/'.$view.'.html.php')){
            throw new \Exception("La vue $view n'existe pas."); //arrête le code et renvoie l'exception
        }

        foreach ($data as $variable => $value){
            //$name = 'Charlie';
            //${'name'} = 'Charlie';
            //${$variable} = 'Charlie';
            $$variable = $value;
        }
        require '../views/'.$view.'.html.php';
    }

    public static function notFound()
    {
        http_response_code(404);

        return View::render('404');
    }

    public static function redirect($route)
    {
        header("Location: $route");
    }

}

//sans static
// $view = new View ();
//$view->render();

//avec static
//View::render();
?>