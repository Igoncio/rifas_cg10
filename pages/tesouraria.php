<?php

include_once("../includes/menu.php");
include_once("../app/config.php");

$sql = "SELECT * FROM membros ORDER BY nome;";

$result = $conn->query($sql); 
$num_rows = $result->num_rows;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/tesouraria.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<section>

  <h1>Gerenciamento de membros</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Janeiro</th>
          <th>Fevereiro</th>
          <th>Março</th>
          <th>Abril</th>
          <th>Maio</th>
          <th>Junho</th>
          <th>Julho</th>
          <th>Agosto</th>
          <th>Setembro</th>
          <th>Outubro</th>
          <th>Novembro</th>
          <th>Dezembro</th>
          <th>Ações</th>
          <!-- <th>Ações</th> -->
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php
           for ($i = 1; $i < $num_rows; $i++) {
            $user_data = $result->fetch_assoc();
            echo "<tr>"; 
            echo "<td>". $i . "</td>";
            echo "<td>" . $user_data['nome'] . "</td>";
            echo "<td>" . $user_data['janeiro'] . "</td>";
            echo "<td>" . $user_data['fevereiro'] . "</td>";             
            echo "<td>" . $user_data['marco'] . "</td>";
            echo "<td>" . $user_data['abril'] . "</td>";
            echo "<td>" . $user_data['maio'] . "</td>";
            echo "<td>" . $user_data['junho'] . "</td>";
            echo "<td>" . $user_data['julho'] . "</td>";             
            echo "<td>" . $user_data['agosto'] . "</td>";
            echo "<td>" . $user_data['setembro'] . "</td>";
            echo "<td>" . $user_data['outubro'] . "</td>";
            echo "<td>" . $user_data['novembro'] . "</td>";
            echo "<td>" . $user_data['dezembro'] . "</td>";
            echo "<td>'asdfsdfgsdf'</td>";
            echo "</tr>";
        }

        ?>

      </tbody>
    </table>
  </div>
</section>


    <div class="opcoes">

        <a href="cad_membro.php">
            <button>Cadastrar Membro</button>
        </a>

    </div>





   <script src="../assets/js/membros.js"> </script>
</html>