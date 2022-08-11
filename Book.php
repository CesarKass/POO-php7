<?php
class Book {
    private string $author;
    private string $title;
    private float $price;
    private int $stock;
    private int $id;
    public function __construct( $author, $title, $price, $stock, $id )
    {
        $this->author = $author;
        $this->title = $title;
        $this->price = $price;
        $this->stock = $stock;
        $this->id = $id;
    }

    public function getInfo()
    {
        $info = "
        <b> Author: </b> {$this->author} 
        <br>
        <b> Title: </b> {$this->title} 
        <br>
        <b> Price: </b> {$this->price} 
        <br>
        <b> Stock: </b> {$this->stock} 
        <br>
        <b> Id: </b> {$this->id} 
        ";
        return $info;
    }
}

$book1= new Book(
    'Autor',
    'Titulo',
    12,
    2,
    1
);

echo $book1->getInfo(); 