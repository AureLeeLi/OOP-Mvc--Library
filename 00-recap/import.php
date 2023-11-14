<!-- script pr remplir la base connexion pr se connection en pdo requete insert -->
<?php
//recup des valeurs du tableau pour les mettres en bdd
require 'data.php'; 

// connexion à la base de données.
require 'config/database.php';

//insertion des données
$query = $db->prepare('INSERT INTO books (title, price, discount, isbn, author, published_at, image) 
                        VALUES (:title, :price, :discount, :isbn, :author, :published_at, :image)');
                        // VALUES (?, ?, ?, ?, ?, ?, ?)');
foreach($books as $index => $book){
    $query->execute([
        //$book['title],... si ? dans les values requête
        "title" => $book['title'],
        "price" => $book['price'],
        "discount" => $book['discount'],
        "isbn" => $book['isbn'],
        "author" => $book['author'],
        "published_at" => $book['published_at'],
        "image" => $book['image'],
    ]);
}

?>
