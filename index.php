<?php
$catalogo = [
    [
        "id" => 1,
        "titulo" => "Matrix",
        "genero" => "Ficção Científica",
        "ano" => 1999,
        "classificacao" => 14
    ],
    [
        "id" => 2,
        "titulo" => "Interestelar",
        "genero" => "Ficção Científica",
        "ano" => 2014,
        "classificacao" => 12

    ],
    [
        "id" => 3,
        "titulo" => "Deadpool",
        "genero" => "Comédia",
        "ano" => 2016,
        "classificacao" => 16

    ],
    [
        "id" => 4,
        "titulo" => "Mortal Kombat II",
        "genero" => "Ação/Aventura",
        "ano" => 2026,
        "classificacao" => 18

    ]

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
    echo "<h3>".$filme["titulo"]."</h3>";
    echo "<div class='text-secondary'>"."Gênero: ".$filme["genero"]."</div>";
    echo "Ano: ".$filme["ano"];
   
    if ($filme["classificacao"] == 18){
        echo "<p><a href='#' class='text-white bg-dark'>"."Classificação: ".$filme["classificacao"]." anos.</a></p><br>"; 

    } else if ($filme["classificacao"] == 16) {
        echo "<div class='text-danger'>"."Classificação: ".$filme["classificacao"]." anos.</div><br>"; 

    } else if($filme["classificacao"] == 14){
        echo "<div class='text-warning'>"."Classificação: ".$filme["classificacao"]." anos.</div><br>"; 

     } else {
        echo "<div class='text-success'>"."Classificação: ".$filme["classificacao"]." anos.</div><br>"; 

     }
}

?>
