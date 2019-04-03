<?php 
switch ($page) {
	case "Home": $title = "Home &ndash; Dr Gustavo Souza"; break;
	case "contato": $title = "Contato :: Clube de Aventureiros de Alagoas - Sejam Bem vindos! ::"; break;
	case "empresa": $title = "Empresa :: Clube de Aventureiros de Alagoas - Sejam Bem vindos! ::"; break;
	default: $title = ":: Clube de Aventureiros de Alagoas - Sejam Bem vindos! ::"; break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Dento - Dentist &amp; Medical HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title><?= $title ?></title>

  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">