<?php
namespace M2i\Mvc\Model;

class Book extends Model{
    public $id;
    public $title;
    public $price;
    public $discount;
    public $isbn;
    public $author;
    public $published_at;
    public $image = 'uploads\06.jpg';


//     public function price($price, $discount = 0)
//     {
//         $taxPrice = $price * (1+ 20/100) * (1 - $discount/100); //45.6
//         $taxPrice = number_format($taxPrice, 2, ',', ' '); //1450.6 devient 1 450,60
//         return $taxPrice;
//     }

//     function isbn($isbn){
//         $result = substr($isbn, 0, 1); // 8

//     if(strlen($isbn)===13){
//         $result = $result.'-'.substr($isbn, 1, 6); //8-248827
//         $result = $result.'-'.substr($isbn, 7, 6); //8-248827-583739
//         return $result = $isbn;
//     }
//     else{
//         $result = $result.'-'.substr($isbn, 1, 4); //8-2488
//         $result = $result.'-'.substr($isbn, 5, 4); //8-2488-2758
//         $result = $result.'-'.substr($isbn, 9, 10); //8-2488-2758
        
//         return $result = $isbn;
//     }
// }

}
