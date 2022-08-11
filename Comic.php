<?php
require 'Book.php';
class Comic extends Book { 
    public function __construct($author, $title, $price, $stock, $id, $imagen, $volumen)
    { 
        parent::__construct($author, $title, $price, $stock, $id ); 
    } 
}

$comic1= new Comic(
    'Autor Comic',
    'Titulo Comic',
    34,
    22,
    4,
    ['img 1', 'img 2'],
    3
);

echo $comic1->getInfo(); 