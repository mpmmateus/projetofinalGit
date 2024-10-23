<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vintage</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JAVASCRIPT -->
    <script src="app.js"></script>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="estilos.css">
</head>

<body>


    <?php
    $pagina = str_replace(".php", "", basename($_SERVER['PHP_SELF']));
    ?>

    <nav class="navbar navbar-expand-md bg-body-tertiary ">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link <?= ($pagina == "index") ? "active" : "" ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($pagina == "sobrenos") ? "active" : "" ?>" href="sobrenos.php">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($pagina == "solucoes") ? "active" : "" ?>" href="solucoes.php">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($pagina == "galeria") ? "active" : "" ?>" href="galeria.php">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($pagina == "contactos") ? "active" : "" ?>" href="contactos.php">Contactos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Conta
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="areaCliente.php">Área Cliente</a></li>
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="registo.php">Registo</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav" style="margin-left: auto;">
                    <li class="nav-item" style="text-align: right;">
                        <a class="nav-link <?= ($pagina == "carrinho") ? "active" : "" ?>" href="carrinho.php"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>