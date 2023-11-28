<?php

if(!empty($_GET['id'])){

    include_once('../app/config.php');

    $id = $_GET['id'];  
    $sqlSelect = "SELECT * FROM membros WHERE id=$id";
    $result = $conn->query($sqlSelect);
    
    if ($result) {
        // Processar o conjunto de resultados
        while ($row = $result->fetch_assoc()) {
            echo $row;
        }
    
        // Liberar o conjunto de resultados
        $result->free();
    } else {
        // Lidar com o erro da consulta
        echo "Erro: " . $conn->error;
    }
    



}


?> 