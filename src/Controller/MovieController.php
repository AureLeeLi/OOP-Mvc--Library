<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\Movie;
use M2i\Mvc\View;

class MovieController 
{
    public function list()
    {
        $title = 'Films';
        // $movies = Movie::fake();
        // avec la bdd
        $movies = Movie::all(); 
        foreach($movies as &$movie){ 
            //modifie la valeur qui est dans le tableau, référence entre movie et movies
            // $movie['duration']= date("H\hi", $movie['duration']*60);
            $hours= floor($movie['duration']/60); 
            $minutes= $movie['duration'] %60;
            if ($minutes<10){
                $minutes = '0'.$minutes;
            }
            $movie['duration'] = $hours.'h'.$minutes;
        }

        return View::render('movie', [
            'title' => $title,
            'movies'=> $movies,
        ]);
    }
}