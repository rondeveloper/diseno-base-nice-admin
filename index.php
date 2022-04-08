<?php
session_start();

/* Redireccion para cuando no esta logueado */
if (!isset($_SESSION['token-usuario'])) {
    header('Location: ./login.php');
    exit;
}

/* Contenido de la UI en includes */
include_once "app/pages/cabecera.php";
include_once "app/pages/menu.php";
include_once "app/pages/contenido.php";
include_once "app/pages/pie_de_pagina.php";
