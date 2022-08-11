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
}