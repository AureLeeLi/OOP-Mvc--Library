<?php

namespace M2i\Mvc\Model;

class Movie extends Model
{
    public $id; 
    public $title;
    public $duration;
    public $image;


    public static function fake()
    {
        //retourner le tableau des films via la base de données
        return [
            [
                'id' => 1,
                'title' => 'Shrek Forever After',
                'duration' => 93,
                'image' => 'https://image.tmdb.org/t/p/original/6HrfPZtKcGmX2tUWW3cnciZTaSD.jpg',
            ],
            [
                'id' => 2,
                'title' => 'Planes',
                'duration' => 91,
                'image' => 'https://image.tmdb.org/t/p/original/9uqCaPEIep4iBG3U4AqSP20LGjq.jpg',
            ],
            [
                'id' => 3,
                'title' => 'La Pat\' Patrouille',
                'duration' => 85,
                'image' => 'https://image.tmdb.org/t/p/original/iuEmUPqigSBFdu8vRZvVA4parQg.jpg',
            ],
            [
                'id' => 4,
                'title' => 'Gran Turismo',
                'duration' => 95,
                'image' => 'https://image.tmdb.org/t/p/original/vRIHkkuI6FKqUHPJbABbNLRM3VI.jpg',
            ],
        ];
    }
}