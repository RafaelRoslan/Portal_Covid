<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Portal Covid</title>
</head>


<?php
if(isset($_GET['page'])) {
    $page = $_GET['page'];
    echo($page);
} else {
    // set proper default value if it was not set
    $page = 'index';
}?>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger bg-opacity-50">
      <div class="container-fluid">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#teste"
          aria-controls="teste" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a href="index.html"><img src="imagens/target.svg" alt="icone"></a>
        <a class="navbar-brand" href="#">Portal Covid</a>
        <div class="collapse navbar-collapse" id="teste">
          
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?php if($page == "index.php") echo "disabled"; ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page == "oquee.php") echo"disabled"; ?>" href="oquee.php">O que é</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page == "consequencia.php") echo "disabled"; ?>" href="consequencia.php">Consequências</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page == "variante.php") echo "disabled"; ?>" href="variante.php">Variantes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page == "prevencao.php") echo "disabled"; ?>" href="prevecao.php">Prevenção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page == "vacina.php") echo "disabled"; ?>" href="vacina.php">Vacinas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page == "disseminacao.php") echo "disabled"; ?>" href="disseminacao.php">Disseminação</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page == "quemsomos.php") echo "disabled"; ?>" href="quemsomos.php">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page == "contato.php") echo "disabled"; ?>" href="contato.php">Contato</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-light" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <br>

  <main class="container py-5">
        <!-- inicio conteudo -->