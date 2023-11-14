<?php

$sum = $_POST['sum']?? null;
$bitcoin = 32633;
$result = 0;

if(isset($_POST)){
    if(isset($_POST['sum']) && isset($_POST['convert'])){
        $result = $sum*$bitcoin;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/477e17b079.js" crossorigin="anonymous"></script>
    <title>Convertisseur Bitcoin Euros</title>
    <style>
       form {
        width:50%;
        height: 400px;
        margin: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
       }
       input, button,label, option{
        width:30%;
        margin: auto;
        padding:0.5rem;
        border-radius: 25px;
       }
       .radios{
        display: flex;
       }
       h1{
        text-align: center;
       }
    </style>
</head>
<body>
<form action="" method="post">
        <label for="sum">Somme à convertir :</label>
        <input type="number" name="sum" id="">
    <div class="select">
        <select name="convert">
            <option value="bitcoins">
                Bitcoin to Euros
                <i class="fa-solid fa-bitcoin-sign" style="color: #a28702;"></i><i class="fa-solid fa-arrow-right" style="color: #000000;"></i> <i class="fa-solid fa-euro-sign" style="color: #a28702;"></i>
            </option>
            <option value="euros">
                Euros to Bitcoin
                <i class="fa-solid fa-bitcoin-sign" style="color: #a28702;"></i> <i class="fa-solid fa-arrow-right" style="color: #000000;"></i> <i class="fa-solid fa-euro-sign" style="color: #a28702;"></i>
            </option>
    </select>
    </div>
    <button type="submit">Convertir</button>
    <h1><?= $result;?></h1>

    <h4>1 <i class="fa-solid fa-bitcoin-sign" style="color: #a28702;"></i> = 32633,56 €</h4>
    <h4>1 <i class="fa-solid fa-euro-sign" style="color: #a28702;"></i> = 0,000031 BTC</h4>
</form>
</body>
</html>
