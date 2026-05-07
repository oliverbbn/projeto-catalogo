<?php
$filme = [
    "id" => 1,
    "titulo" =>"Oppenheimer",    
    "diretor" => "Cristopher Nolan",
    "ano_lancamento" => 2023,
    "nota_imdb" => 8.4,
    "genero" => "Drama"
];

echo "<h2>".$filme["titulo"]."</h2>";
echo "Diretor: ".$filme["diretor"]."<br>";
echo "Ano: ".$filme["ano_lancamento"]."<br>";
echo "Nota: ".$filme["nota_imdb"]."<br>";
echo "Genero: ".$filme["genero"]."<br>";
echo "<br>";

if (isset($filme["diretor"],$filme["nota_imdb"])){
    echo $filme["diretor"]."<br>";
    echo $filme["nota_imdb"]."<br>";
}

echo "<br>";

foreach ($filme as $chave => $valor) {
    echo "<strong>".$chave."</strong>".";".$valor."<br>";
}