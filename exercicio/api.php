<?php
   header('Content-Type:aplication/json');
   include 'conexao.php';

   $metodo = $_SERVER['REQUEST_METHOD'];

   echo json_encode($metodo);
?>