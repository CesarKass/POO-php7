<?php
require 'Book.php';
class Comic extends Book { 
    private array $imagen;
    private int $volumen; 
    public function __construct($author, $title, $price, $stock, $id, $imagen, $volumen)
    { 
        parent::__construct($author, $title, $price, $stock, $id ); 
        $this->imagen = $imagen;
        $this->volumen = $volumen;
    } 
    
    public function getInfo()
    {
        $template = parent::getInfo();
        $template .= "<br>";
        $template .= "<b> Volumen: </b> {$this->volumen} <br>";
        $template .= "<ul> <b> - Imagenes - </b>";
        foreach ($this->imagen as $value) {
            $template .= "<li> $value </li>";
        }
        $template .= "</ul>";
        return $template;
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