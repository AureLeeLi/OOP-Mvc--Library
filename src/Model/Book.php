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
    public $image;


    /**
     * Détermine si le livre est en promotion.
     */
    public function hasDiscount()
    {
        return $this->discount > 0;
    }

    /**
     * Permet de calculer un prix TTC.
     */
    public function price($withDiscount = false) {
        $percentage = $withDiscount ? $this->discount : 0;
        $taxPrice = $this->price * (1 + 20 / 100) * (1 - $percentage / 100); // 45.6
        $taxPrice = number_format($taxPrice, 2, ',', ' '); // 1450.6 devient 1 450,60

        return $taxPrice;
    }

    /**
     * Permet de formater une date US en années.
     */
    public function year()
    {
        return $this->date('Y');
    }

    /**
     * Permet de formater une date US en ce qu'on veut.
     */
    public function date($format = 'd/m/Y')
    {
        return date($format, strtotime($this->published_at));
    }

    /**
     * Permet de formater un ISBN.
     * 8248827583739 => 8-248827-583739
     * 8248827583    => 8-2488-2758-3
     */
    public function isbn()
    {
        $result = substr($this->isbn, 0, 1); // 8

        $size = strlen($this->isbn); // 10 ou 13
        $offset = ceil($size / 2);
        $result .= '-'.substr($this->isbn, 1, $offset - 1); // 8-248827
        $result .= '-'.substr($this->isbn, $offset, $offset - 1); // 8-248827-583739

        if ($size == 10) {
            $result .= '-'.substr($this->isbn, -1); // 8-2488-2758-3
        }

        return $result;
    }
}