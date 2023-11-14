<?php
namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\Book;
use M2i\Mvc\View;

class BookController {

    //recup tous les livres en bdd (select * dans le Model)
    public function list()
    {
        $books = (Book::all()); 
        return View::render('books', [
            'books' => $books,
        ]);
    }
    
    //affichage d'un livre cliqué (grâce à l'id en get)
    public function show($id)
    {
        $book = (Book::find($id));
        if(! $book){ //si book =  not find -> renvoie une 404.
            http_response_code(404);
            return View::render('404');
        }

        //vue de l'affichage du livre
        return View::render('book', [
            'title' => $book['title'],
            'price' => $book['price'],
            'discount' => $book['discount'],
            'isbn' => $book['isbn'],
            'author' => $book['author'],
            'published_at' => $book['published_at'],
            'image' => $book['image'],
        ]);

        //fonction price et isbn ici ??
    }

    //insert
    public function create()
    {
        //création d'un nvo livre et récup des données avant insertion
    $book = new Book();
    
    //traitement du formulaire
    //1 - recupérer les données
    $book->title = $_POST['title'] ?? null;
    $book->price = $_POST['price'] ?? null;
    $book->discount = $_POST['discount'] ?? null;
    $book->isbn = $_POST['isbn'] ?? null;
    $book->author = $_POST['author'] ?? null;
    $book->published_at = $_POST['published_at'] ?? null;
    $errors =[];

    // 2 - Verification des données (si le formulaire a été envoyé)
    if(!empty($_POST)) { //formulaire non vide
        if(empty($book->title)) {
            $errors['title']= 'Le titre est obligatoire.';
        }
        if($book->price<1 || $book->price>100) {
            $errors['price']= 'Le prix est obligatoire et doit etre compris entre 1 et 100€.';
        }
        if(!empty($book->discount) && ($book->discount>100 || $book->discount<0)) {
            $errors['discount']= 'La promotion doit etre comprise entre 0 et 100%.';
        }
        if(strlen($book->isbn) !=13 && strlen($book->isbn) !=10) {
            $errors['isbn']= 'L\'ISBN est invalide, il doit contenir 10 ou 13 chiffres.';
        }
        if(empty($book->author)) {
            $errors['author']= 'Veuillez entrer le nom de l\'auteur.';
        }
         //verif format date // $published_at = "2023-11-06"
        $checked = explode('-', $book->published_at); 
        // [2023,11,06]
        //(int) permet de caster une chaine en entier
        if(!checkdate($checked[1] ?? 0, $checked[2] ?? 0, (int)$checked[0])) { 
            $errors['published_at'] = 'La date est invalide.';
        }
        
        if(empty($errors)){ //verif si le tableau d'erreurs contient qqch, si il est vide on fait la requête.

            //fonction insert dans Model avec noms des colonnes de la bdd
            $book->save(['title','price', 'discount', 'isbn', 'author', 'published_at','image']);

            //redirection
        }
    }
    
        return View::render('create', [
            'errors' => $errors,
            'book' => $book,
        ]);
        //message "le livre a bien été ajouté"
    }

    //delete
    public function delete($id)
    {
        //retrouve l'id du book à supprimer
        $book = (Book::find($id));

       
        // $sql = "DELETE FROM $table WHERE id = :id";
        // $query= Database::get()->prepare($sql);
        // return $query->execute(['id' => ($id)]);
    }

    //edit 
    public function edit($id)
    {
        $book = (Book::find($id));
        
        //traitement du formulaire
        //1 - recupérer les données
        $title = $_POST['title'] ?? null;
        $price = $_POST['price'] ?? null;
        $discount = $_POST['discount'] ?? null;
        $isbn = $_POST['isbn'] ?? null;
        $author = $_POST['author'] ?? null;
        $published_at = $_POST['published_at'] ?? null;
        $errors =[];

        // 2 - Verification des données (si le formulaire a été envoyé)
        if(!empty($_POST)) { //formulaire non vide
            if(empty($title)) {
                $errors['title']= 'Le titre est obligatoire.';
            }
            if($price<1 || $price>100) {
                $errors['price']= 'Le prix est obligatoire et doit etre compris entre 1 et 100€.';
            }
            if(!empty($discount) && ($discount>100 || $discount<0)) {
                $errors['discount']= 'La promotion doit etre comprise entre 0 et 100%.';
            }
            if(strlen($isbn) !=13 && strlen($isbn) !=10) {
                $errors['isbn']= 'L\'ISBN est invalide, il doit contenir 10 ou 13 chiffres.';
            }
            if(empty($author)) {
                $errors['author']= 'Veuillez entrer le nom de l\'auteur.';
            }
            //verif format date // $published_at = "2023-11-06"
            $checked = explode('-', $published_at); 
            // [2023,11,06]
            //(int) permet de caster une chaine en entier
            if(!checkdate($checked[1] ?? 0, $checked[2] ?? 0, (int)$checked[0])) { 
                $errors['published_at'] = 'La date est invalide.';
            }
            
            if(empty($errors)){ //verif si le tableau d'erreurs contient qqch, si il est vide on fait la requête.

                //fonction insert dans Model
                $book->update(['title','price', 'discount', 'isbn', 'author', 'published_at','image']);

                //redirection vers /books avec message "le livre a bien été modifié"
            }
        }
        
            return View::render('edit', [
                'errors' => $errors,
                'book' => $book,
            ]);
        }
        
    }