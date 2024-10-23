<?php

$servidor = "localhost";
$userBaseDados = "site_pweb13_user";
$passwordBaseDados = "girafa9122M";
$badeDados = "loja_roupa";

$dbc = mysqli_connect($servidor, $userBaseDados, $passwordBaseDados, $badeDados)
    or die("Erro de acesso à Base de dados.".mysqli_connect_error());

    mysqli_set_charset($dbc, "utf8");
?>
