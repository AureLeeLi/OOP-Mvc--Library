<?php

// Au clic sur le bouton "Calculer", faire la somme du nombre1 et du nombre2
// Ajouter un champ radio ou select permettant de choisir l'opération (+, -, /, *)
// En bonus, indiquer le nombre qui est le plus grand et celui qui est le plus petit
$number1 = $_POST['number1']?? null;
$number2 = $_POST['number2'] ?? null;
$result = 0;
if(isset($_POST)){
    if(isset($_POST['add'])){
        $result = $number1+$number2;
    }
    else if(isset($_POST['soustraction'])){
        $result = $number1-$number2;
    }
    else if(isset($_POST['multiplication'])){
        $result = $number1*$number2;
    }
    else if(isset($_POST['division'])){
        $result = $number1/$number2;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       form {
        width:60%;
        height: 400px;
        margin: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
       }
       input, button,label{
        width:40%;
        margin: auto;
        padding:1rem;
        border-radius: 25px;
       }
       .radios{
        display: flex;
        width:50%;
        justify-content: center;
       }
       .radio{
        display: flex;
       }
       h1{
        text-align: center;
       }
    </style>
</head>
<body>
<h1><?= $result;?></h1>
<form action="" method="post">
        <label for="number1">Number 1 :</label>
        <input type="number" name="number1" id="">
        <label for="number1">Number 2 :</label>
        <input type="number" name="number2" id="">
    <div class="radios">
        <div class="radio">
            <label for="add">➕</label>
            <input type="radio" name="add" id="">
        </div>
        <div class="radio">
            <label for="soustraction">➖</label>
            <input type="radio" name="soustraction" id="">
        </div>
        <div class="radio">
            <label for="multiplication">✖</label>
            <input type="radio" name="multiplication" id="">
        </div>
        <div class="radio">
            <label for="division">➗</label>
            <input type="radio" name="division" id="">
        </div>
    </div>
    
    <button type="submit">Calculer</button>
</form>
</body>
</html>
