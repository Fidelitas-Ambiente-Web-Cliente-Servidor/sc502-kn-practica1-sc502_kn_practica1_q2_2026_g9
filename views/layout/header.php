<?php

$controller = $_GET['controller'] ?? 'index';

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>TechNova Academy</title>

<link rel="stylesheet" href="css/style.css?v=5">
<link rel="stylesheet" href="css/pages.css?v=5">

</head>

<body>

<nav class="navbar">

    <div class="logo">
        <h2>TechNova Academy</h2>
    </div>

    <ul class="nav-links">

        <li>
            <a class="<?= $controller == 'index' ? 'active' : '' ?>"
               href="index.php?controller=index&action=index">
                Inicio
            </a>
        </li>

        <li>
            <a class="<?= $controller == 'cursos' ? 'active' : '' ?>"
               href="index.php?controller=cursos&action=index">
                Cursos
            </a>
        </li>

        <li>
            <a class="<?= $controller == 'profesores' ? 'active' : '' ?>"
               href="index.php?controller=profesores&action=index">
                Profesores
            </a>
        </li>

        <li>
            <a class="<?= $controller == 'contacto' ? 'active' : '' ?>"
               href="index.php?controller=contacto&action=index">
                Contacto
            </a>
        </li>

    </ul>

</nav>