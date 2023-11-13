<?php

namespace M2i\Mvc;

// permet de se connecter à la base
// La classe Database sera une implémentation du design pattern singleton. 

class Database
{
    private static $instance;

    public static function get()
    {
        if (null === self::$instance) {
            self::$instance = new \PDO('mysql:host=localhost;dbname=bookphp', 'root', '');
        }

        return self::$instance;
    }
}

?>