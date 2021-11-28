<?php

class connexion
{
    public function CNXbase() {
        $db = new PDO('mysql:host=localhost;dbname=biblio','root');
        return $db;
    }
}

?>
