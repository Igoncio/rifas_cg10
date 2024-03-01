<?php
include_once("config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $jan = $_POST['jan'];
    $fev = $_POST['fev'];
    $mar = $_POST['mar'];
    $abr = $_POST['abr'];
    $mai = $_POST['mai'];
    $jun = $_POST['jun'];
    $jul = $_POST['jul'];
    $ago = $_POST['ago'];
    $set = $_POST['set'];
    $out = $_POST['out'];
    $nov = $_POST['nov'];
    $dez = $_POST['dez'];

    // Utilize declarações preparadas para evitar injeção de SQL
    $sqlUpdate = "UPDATE membros SET janeiro=?, fevereiro=?, marco=?, abril=?, maio=?, junho=?, julho=?, agosto=?, setembro=?, outubro=?, novembro=?, dezembro=? WHERE id=?";
    $stmt = $conn->prepare($sqlUpdate);
    $stmt->bind_param('ssssssssssssi', $jan, $fev, $mar, $abr, $mai, $jun, $jul, $ago, $set, $out, $nov, $dez, $id);
    $stmt->execute();

    $stmt->close();
}

header('Location: ../pages/tesouraria.php');
?>