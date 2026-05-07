<?php
$catalogo = [
    [
        "id" => 1,
        "titulo" => "Matrix",
        "genero" => "Ficção Científica",
        "ano" => 1999
    ],
    [
        "id" => 2,
        "titulo" => "Interestelar",
        "genero" => "Ficção Científica",
        "ano" => 2014
    ],
    [
        "id" => 3,
        "titulo" => "Deadpool",
        "genero" => "Comédia",
        "ano" => 2016
    ],
];

echo $catalogo[0]["titulo"]."<br>";
echo $catalogo[1]["genero"]."<br>";
echo "<br>";
echo $catalogo[2]["titulo"]."<br>";
echo $catalogo[0]["ano"]."<br>";


