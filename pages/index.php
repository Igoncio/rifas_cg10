<?php


include_once("../app/config.php");
// Inicia a sessão
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obter dados do formulário
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT * FROM usuarios WHERE nome='$nome' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Autenticação bem-sucedida
        $_SESSION['alert'] = "success";
        header("Location: home.php");
    } else {
        // Autenticação falhou
        $_SESSION['alert'] = "error";
        header("Location: index.php");
        exit();
    }

    // Fechar a conexão
    $conn->close();

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/cad.css">
    <title>Caixa</title>
</head>
<body>

    
    <?php
    // Exibe a mensagem, se houver
    if (isset($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        // Limpa a mensagem para não exibi-la novamente após um refresh
        unset($_SESSION['mensagem']);
    }

    if (isset($_SESSION['alert'])) {
        echo $_SESSION['alert'];
        // Limpa a mensagem para não exibi-la novamente após um refresh
        unset($_SESSION['alert']);
    }
    ?>

    <form class="form-area" action="index.php" method="post">

        <h2 class="form-h1">Login</h2>
        
        <input class="input-box" type="text" name="nome" placeholder="Nome" required><br>

        <input class="input-box" type="password" name="senha" placeholder="Senha" required><br>

        <input class="btn-submit" type="submit" value="Entrar">

    </form>

</body>
</html>
