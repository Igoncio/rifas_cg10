<?php

include_once("../includes/menu.php");
include_once("../app/config.php");

if(isset($_POST['submit'])){

    $nome = $_POST['nome'];
    $id_dm = $_POST['id_dm'];
    $grau = $_POST['grau'];
    $tipo = $_POST['tipo'];
    $data_nasc = $_POST['data_nasc'];


    $result = mysqli_query(
        $conn, 
        "INSERT INTO
        membros(nome, id_dm, grau, tipo, data_nasc)
        VALUES 
        ('$nome', '$id_dm', '$grau', '$tipo', '$data_nasc')"
    );

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/cad_membro.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
      <div class="text">
         Cadastrar Membro
      </div>
      <form action="#" method="POST">
         <div class="form-row">
            <div class="input-data">
               <input name="nome" type="text" required>
               <div class="underline"></div>
               <label for="">Nome</label>
            </div>

            <div class="input-data">
               <input name="id_dm" type="text" required>
               <div class="underline"></div>
               <label " for="">ID Demolay</label>
            </div>

         </div>

            <div class="form-row">
                <select name="grau" class="form-select" aria-label="Default select example">
                    <option  selected>Selecione o Grau</option>
                    <option value="ini">Iniciático</option>
                    <option value="dm">DeMoLay</option>
                </select>

                <select name="tipo" class="form-select" aria-label="Default select example">
                    <option selected>Selecione o Status</option>
                    <option value="atv-r">Ativo/regular</option>
                    <option value="sen">Senior</option>
                    <option value="atv-n">Ativo/não regular</option>
                </select>
            </div>

        <div class="form-row">
            <div class="input-box">
                <label>Data de nacimento</label>
                <input name="data_nasc" required="" type="date">
            </div>
        </div>

         <div class="form-row">
            <div class="input-data textarea">
   
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input name="submit" type="submit" value="Cadastrar">
               </div>
            </div>

            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <a href="membros.php">
                  <input value="Voltar">
                  </a>
               </div>
            </div>
      </form>
    </div>
    
</body>
</html>