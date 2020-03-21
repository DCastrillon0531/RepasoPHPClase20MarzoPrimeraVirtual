<?php

include('libro.php');

$libro1 = new libro("100 años de soledad","Gabriel Garcia Marquez",1,0);
$libro2 = new libro("14 años de soledad", "gabriel",100,0);

$libro1->prestamo();
echo("<br>");
$libro2->prestamo();





?>