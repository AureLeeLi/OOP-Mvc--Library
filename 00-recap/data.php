<?php

$books = [
    [
        'id' => 1,
        'title' => 'Quae dolor itaque natus reiciendis ad quae.',
        'price' => 38,
        'discount' => 19,
        'isbn' => '8248827583739',
        'author' => 'Denise-Sabine Bernard',
        'published_at' => '2014-08-18',
        'image' => 'uploads/06.jpg',
    ],
    [
        'id' => 2,
        'title' => 'In in facilis quam vitae.',
        'price' => 26,
        'discount' => 0,
        'isbn' => '3680780915',
        'author' => 'Nicolas de la Courtois',
        'published_at' => '1987-10-22',
        'image' => 'uploads/05.jpg',
    ],
    [
        'id' => 3,
        'title' => 'Dolorum sit veritatis atque rerum cum quaerat.',
        'price' => 78,
        'discount' => 20,
        'isbn' => '0432990694820',
        'author' => 'Aimé Martineau',
        'published_at' => '2008-08-07',
        'image' => 'uploads/02.jpg',
    ],
    [
        'id' => 4,
        'title' => 'Illo deleniti commodi ex.',
        'price' => 29,
        'discount' => 18,
        'isbn' => '7445094667310',
        'author' => 'Arthur Allard',
        'published_at' => '1991-07-23',
        'image' => 'uploads/01.jpg',
    ],
    [
        'id' => 5,
        'title' => 'Et modi sit dolorum.',
        'price' => 45,
        'discount' => 18,
        'isbn' => '0857622132295',
        'author' => 'Alphonse Gros',
        'published_at' => '1981-10-04',
        'image' => 'uploads/02.jpg',
    ],
    [
        'id' => 6,
        'title' => 'Quam iusto natus eos.',
        'price' => 62,
        'discount' => 11,
        'isbn' => '9478341825490',
        'author' => 'Théodore Francois',
        'published_at' => '2013-02-09',
        'image' => 'uploads/03.jpg',
    ],
    [
        'id' => 7,
        'title' => 'Natus possimus modi sint hic ut tempore.',
        'price' => 68,
        'discount' => 10,
        'isbn' => '0873356029069',
        'author' => 'René Joly',
        'published_at' => '1996-01-30',
        'image' => 'uploads/06.jpg',
    ],
    [
        'id' => 8,
        'title' => 'Maxime vel ut similique.',
        'price' => 25,
        'discount' => 10,
        'isbn' => '0593548548504',
        'author' => 'Henriette Gomes',
        'published_at' => '1975-08-20',
        'image' => 'uploads/05.jpg',
    ],
    [
        'id' => 9,
        'title' => 'Quia officia dignissimos et natus a.',
        'price' => 50,
        'discount' => 11,
        'isbn' => '1309708700366',
        'author' => 'Guillaume Leleu',
        'published_at' => '2021-09-29',
        'image' => 'uploads/05.jpg',
    ],
    [
        'id' => 10,
        'title' => 'Enim et omnis aliquid.',
        'price' => 60,
        'discount' => 14,
        'isbn' => '1223719243691',
        'author' => 'Louise Guyon',
        'published_at' => '1994-04-24',
        'image' => 'uploads/05.jpg',
    ],
];

// $title = 'Quae dolor itaque natus reiciendis ad quae.';
// $price = 38; // sans taxes
// $discount = 19;
// $isbn = '8248827583739'; // ISBN 13 ou 10 non formaté 2-7654-1005-4 ou 2-765412-005123
// $author = 'Denise-Sabine Bernard';
// $publishedAt = '2014-08-18';
// $image = 'uploads/06.jpg';

/**
 * permet de calculer un prix TTC
 */
function price($preTaxPrice,$discount = 0){
    $taxPrice = $preTaxPrice * (1+ 20/100) * (1 - $discount/100); //45.6
    $taxPrice = number_format($taxPrice, 2, ',', ' '); //1450.6 devient 1 450,60
    return $taxPrice;
}

/**
 * permet de formater un ISBN.
 * 10 ou 13 caractères
 * 8248827583739 => 8-248827-583739
 * 824882758373 => 8-2488-2758-3
 */
function isbn($numbers){
        $result = substr($numbers, 0, 1); // 8

    if(strlen($numbers)===13){
        $result = $result.'-'.substr($numbers, 1, 6); //8-248827
        $result = $result.'-'.substr($numbers, 7, 6); //8-248827-583739
        return $result;
    }
    else{
        $result = $result.'-'.substr($numbers, 1, 4); //8-2488
        $result = $result.'-'.substr($numbers, 5, 4); //8-2488-2758
        $result = $result.'-'.substr($numbers, 9, 10); //8-2488-2758
        
        return $result;
    }
}


// image $book['image'];
// foreach($books as $book){
//     echo $book['title'].'<br>';
//     echo price($book['price']).'<br>';
//     echo $book['discount'].'<br>';
//     echo $book['author'].'<br>';
    // echo $book[date('d.m.y', strtotime($book['published_at']));]
    // echo isnb(($book['isbn'])).'<br>';
// }


//etape $idBook = $_get[id de book];

?>

