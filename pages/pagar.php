<?php

if(!empty($_GET['id'])){

    include_once('../app/config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM membros WHERE id=$id";

    $result = $conn->query($sqlSelect);

    if($result->num_rows > 0){

        while($user_data =  mysqli_fetch_assoc($result)){
            
            $nome = $user_data['nome'];
            $jan = $user_data['janeiro'];
            $fev = $user_data['fevereiro'];
            $mar = $user_data['marco'];
            $abr = $user_data['abril'];
            $mai = $user_data['maio'];
            $jun = $user_data['junho'];
            $jul = $user_data['julho'];
            $ago = $user_data['agosto'];
            $set = $user_data['setembro'];
            $out = $user_data['outubro'];
            $nov = $user_data['novembro'];
            $dez = $user_data['dezembro'];

        }

    }
    else{
        header('Location: tesouraria.php');
    }

}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="../app/edit.php" method="POST">
    <div class="jan-sec">
        <label for="">Janeiro:</label>
        <select name="jan" class="form-select" aria-label="Default select example">
            <option selected>"<?php echo $jan ?>"</option>
            <option value="pago">Pago</option>
            <option value="a pagar">a pagar</option>
        </select>
    </div>

    <div class="fev-sec">
        <label for="">Fevereiro:</label>
        <select name="fev" class="form-select" aria-label="Default select example">
            <option selected>"<?php echo $fev ?>"</option>
            <option value="pago">Pago</option>
            <option value="a pagar">a pagar</option>
        </select>
    </div>

    <div class="mar-sec">
        <label for="">Março:</label>
        <select name="mar" class="form-select" aria-label="Default select example">
            <option selected>"<?php echo $mar ?>"</option>
            <option value="pago">Pago</option>
            <option value="a pagar">a pagar</option>
        </select>
    </div>

    <div class="abr-sec">
        <label for="">Abril:</label>
        <select name="abr" class="form-select" aria-label="Default select example">
            <option selected>"<?php echo $abr ?>"</option>
            <option value="pago">Pago</option>
            <option value="a pagar">a pagar</option>
        </select>
    </div>

    <div class="mai-sec">
        <label for="">Maio:</label>
        <select name="mai" class="form-select" aria-label="Default select example">
            <option selected>"<?php echo $mai ?>"</option>
            <option value="pago">Pago</option>
            <option value="a pagar">a pagar</option>
        </select>
    </div>

    <div class="jun-sec">
        <label for="">Junho:</label>
        <select name="jun" class="form-select" aria-label="Default select example">
            <option selected>"<?php echo $jun ?>"</option>
            <option value="pago">Pago</option>
            <option value="a pagar">a pagar</option>
        </select>
    </div>

    <div class="jul-sec">
        <label for="">Julho:</label>
        <select name="jul" class="form-select" aria-label="Default select example">
            <option selected>"<?php echo $jul ?>"</option>
            <option value="pago">Pago</option>
            <option value="a pagar">a pagar</option>
        </select>
    </div>

    <div class="ago-sec">
        <label for="">Agosto:</label>
        <select name="ago" class="form-select" aria-label="Default select example">
            <option selected>"<?php echo $ago ?>"</option>
            <option value="pago">Pago</option>
            <option value="a pagar">a pagar</option>
        </select>
    </div>

    <div class="set-sec">
        <label for="">Setembro:</label>
        <select name="set" class="form-select" aria-label="Default select example">
            <option selected>"<?php echo $set ?>"</option>
            <option value="pago">Pago</option>
            <option value="a pagar">a pagar</option>
        </select>
    </div>

    <div class="out-sec">
        <label for="">Outubro:</label>
        <select name="out" class="form-select" aria-label="Default select example">
            <option selected>"<?php echo $out ?>"</option>
            <option value="pago">Pago</option>
            <option value="a pagar">a pagar</option>
        </select>
    </div>

    <div class="nov-sec">
        <label for="">Novembro:</label>
        <select name="nov" class="form-select" aria-label="Default select example">
            <option selected>"<?php echo $nov ?>"</option>
            <option value="pago">Pago</option>
            <option value="a pagar">a pagar</option>
        </select>
    </div>

    <div class="dez-sec">
        <label for="">Dezembro:</label>
        <select name="dez" class="form-select" aria-label="Default select example">
            <option selected>"<?php echo $dez ?>"</option>
            <option value="pago">Pago</option>
            <option value="a pagar">a pagar</option>
        </select>
    </div>

    <input type="submit" name="update" id="update" value="Salvar" class="update">

    <input type="hidden" name="id" value="<?php echo $id ?>">
</form>

</body>
</html>
