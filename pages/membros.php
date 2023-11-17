<?php

include_once("../includes/menu.php");
include_once("../app/config.php");

$sql = "SELECT * FROM membros;";

$result = $conn->query($sql); 
$num_rows = $result->num_rows;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/membros.css">
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
          <th>ID</th>
          <th>Nome</th>
          <th>Grau</th>
          <th>Tipo</th>
          <th>Idade</th>
          <!-- <th>Ações</th> -->
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php
           for ($i = 0; $i < $num_rows; $i++) {
            $user_data = $result->fetch_assoc();
            echo "<tr>"; 
            echo "<td>". $i . "</td>";
            echo "<td>" . $user_data['id_dm'] . "</td>";
            echo "<td>" . $user_data['nome'] . "</td>";             
            echo "<td>" . $user_data['grau'] . "</td>";
            echo "<td>" . $user_data['tipo'] . "</td>";
            echo "<td>" . $user_data['data_nasc'] . "</td>";
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