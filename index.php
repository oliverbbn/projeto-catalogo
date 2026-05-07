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
?>
<!DOCTYPE html>
    <html lang="pt-BR">
        <meta charset="UFT-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Projeto Integrador</title>
    <head>


<?php
foreach ($catalogo as $filme) {
    echo "<h3>".$filme["titulo"]."</h3><br>";
    echo "<div class=text-secondary>"."Gênero: ".$filme["genero"]."</div>";
    echo "Ano: ".$filme["ano"]."<br><br>";
}

?>
