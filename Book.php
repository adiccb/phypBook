<?php

class Book {

    // Propiedades

    // Metodo
    public function __construct()
    {
        echo "Soy una instancia de Book";
    }   
}
// instancia de la clase Book.
$book1 = new Book();

var_dump($book1);