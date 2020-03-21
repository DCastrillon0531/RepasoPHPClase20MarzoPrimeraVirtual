<?php

class Libro{

//ATRIBUTOS
public $titulo;
public $autor;
public $ejemplaresTotales;
public $ejemplaresPrestados;

//CONSTRUCTOR
public function __construct($nombre, $escritor, $numero, $prestamo){
    $this->titulo = $nombre;
    $this->autor = $escritor;
    $this->ejemplaresTotales = $numero;
    $this->ejemplaresPrestados = $prestamo;
}

//METODOS
public function prestamo(){
    if($this->ejemplaresTotales > 0){
        $this->ejemplaresTotales=$this->ejemplaresTotales-1;
        echo("El libro: ".$this->titulo." quedo con: ".$this->ejemplaresTotales." libros disponibles.");
    }else{
        echo("Ya no hay ejemplares disponibles.");
    }
}


}





?>