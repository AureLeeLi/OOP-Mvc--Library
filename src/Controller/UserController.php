<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\View;
use M2i\Mvc\Model\User;

// Le contrôleur fait le lien entre le modèle et la vue, les données et le rendu. Le contrôleur reçoit les requêtes de l'utilisateur et il sait quel modèle et quelle vue il doit appeler en fonction de la requête.

class UserController 
{
    public function list()
    {
        $name = 'Charlie';
        $users = (User::all()); //recup tous les users (select*)
        return View::render('list', [
            'name' => $name,
            'cars' => [1, 2, 3],
            'users' => $users,
        ]);
    }
    
    //afficher
    public function show($id)
    {
        $user = (User::find($id));

        if(! $user){ //si user not find -> renvoie une 404.
            http_response_code(404);
            return View::render('404');
        }

        return View::render('show', [
            'user' => $user,
        ]); 
        //vue de l'affichage de l'user
    }

    //insert
    public function create()
    {
        //création d'un nvl utilisateur et récup des données avant insertion
        $user = new User();
        $user->name = $_POST['name'] ?? null;
        $errors = [];
        if(! empty($_POST)){
            if (empty($user->name)){
                $errors['name'] = 'Le nom est invalide.';
            }
            if (empty($errors)){
                //on met le nom des colonnes de la table
                 $user->save(['name']);
                 
                 //redirection vers list users (view)
                 //View::redirect('/utilisateurs');
            }
        }
        return View::render('create', [
            'errors' => $errors,
            'user' => $user,
        ]);
    }

}