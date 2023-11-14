<?php
echo '1. Ecrire une boucle qui affiche les nombres de 10 à 1. <br>';
for ($i = 10; $i >=1; $i--) { //$i -=2...
    echo $i .' - ';
}

echo '<hr>';

echo '2. Ecrire une boucle qui affiche uniquement les nombres pairs entre 1 et 100. <br>';

for($i = 1; $i <=100; $i++){
    if ($i%2 == 0){
        echo $i. '--';
    }
}

echo '<hr>';

echo '3. Ecrire le code permettant de trouver le PGCD de 2 nombres. <br>';
// Entrée = Deux entiers a et b
// Sortie = Le PGCD de a et b
//     tant que a ≠ b
//         si a > b alors
//             a := a − b
//         sinon
//             b := b − a
//     renvoyer a

$nb1 = 12;
$nb2 = 96;
$a = $nb1;
$b = $nb2;

while ($a != $b){
    if($a>$b){
        $a -= $b; //$nb1 = $nb1 - $nb2;
    }
    else {
        $b -= $a;
    }
}
echo $a . ' est le PGCD de ' .$nb1. ' et '.$nb2;

echo '<hr>';

echo '4. Coder le jeu du FizzBuzz : Parcourir les nombres de 0 à 100. <br>

Quand le nombre est un multiple de 3, afficher Fizz. <br>

Quand le nombre est un multiple de 5, afficher Buzz. <br>

Quand le nombre est un multiple de 15, afficher FizzBuzz. <br>

Sinon, afficher le nombre. <br>';

for ($i = 1; $i < 100; $i++) {
    if($i% 15 ===0){
        echo 'FizzBuzz -- ';
    }
    else if ($i% 3 ===0){
        echo 'Fizz -- ';
    }
    else if($i% 5 ===0){
        echo 'Buzz -- ';
    }
    else {
        echo $i .' -- ';
    }
}


echo '<hr>';

echo 'Créer une boucle qui affiche 10 étoiles (*). <br>';
for ($i = 0; $i < 10; $i++) {
    echo '💥';
}

echo '<hr>';

echo 'Imbriquer la boucle dans une autre boucle afin d\'afficher 10 lignes de 10 étoiles. <br>';
for ($i = 1; $i <= 10; $i++) {
    for($j=1; $j <=10; $j++){
        echo '💥';
    }
    echo '<br>';
}

echo '<hr>';

echo 'Nous obtenons un carré. Trouver un moyen de modifier le code pour obtenir un triangle rectangle. <br>';
for ($i = 1; $i <= 10; $i++) {
    for($j=1; $j <=$i; $j++){ //première ligne 1 jusque 1(i), quand i est à 2 j va jusque 2...
        echo '💥';
    }
    echo '<br>';
}


echo '<hr>';

echo '1. Afficher la table de multiplication du chiffre 5.<br>';

for ($i = 1; $i <= 10; $i++) {
    $j=5;
    echo $j.' x ' . $i. ' = ' .$i*$j.'<br>';
}

echo '2. Afficher l\'ensemble des tables de multiplications de 1 à 10. <br>';
for ($i = 1; $i <= 10; $i++) {
    $j=0;
    while($j<11){
        echo $j.' x ' . $i. ' = ' .$i*$j.'<br>';
        $j++;
    }
}


echo '<hr>'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td{
            border : 2px solid black;
            border-collapse : collapse;
        }
        tr{
            height:15px;
        }
        td{
            width: 15px;
        }
        .bg-dark{
            background-color: darkgray;
        }
        .bg-light{
            background-color: lightgray;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td class="bg-light">X</td>
        <?php for($i = 0; $i < 11; $i++) { ?>
        <td class="<?= $i%2 ? 'bg-light' : '';?>"><?= $i;?></td>
        <?php }?>
    </tr>
    <?php for($i = 0; $i < 11; $i++) { ?>
        <tr>
            <td class="<?= $i%2 ? 'bg-light' : '';?>"><?= $i;?></td>
            <?php for($j=0; $j <11; $j++){
                $class='';
                if($i == $j){
                    $class = 'bg-dark';
                } else if ($i%2 == $j%2){
                    $class="bg-light";
                } ?>
                <td class="<?= $class;?>"><?= $i*$j;?></td> <?php }?>
        </tr> <?php } ?>
</table>
</body>
</html>

<?php
echo '<hr>';

echo 'Créer une fonction calculant le carré d\'un nombre. <br>';
function square($nb){
    return $result = $nb*$nb;
    echo $result;
}
echo 'Le carré de 20 est : ' .square(20) .'<br>';

echo 'Créer une fonction calculant l\'aire d\'un rectangle et une fonction pour celle d\'un cercle. <br>';
function rectangleArea($lenght,$width){
    return $result = $lenght*$width;
}
echo 'l\'aire du rectangle  ayant pour longueur 120 et largeur 80 est de : ' .rectangleArea(120,80).'<br>';

function circleArea($radius){
    return $result = $radius*pi();
}
echo 'l\'aire du cercle ayant comme rayon 5 est de : ' .round(circleArea(5),2). '<br>';

echo 'Créer une fonction calculant le prix TTC d\'un prix HT. Nous aurons besoin de 2 paramètres, le prix HT et le taux. <br>';
function price($preTaxPrice,$tax){
    $taxPrice = $preTaxPrice * $tax; //45.6
    $taxPrice = number_format($taxPrice, 2, ',', ' '); //1450.6 devient 1 450,60
    return $taxPrice;
}

echo 'prix TTC de 100€ : ' .price(100, 1.2).'€<br>';

echo 'Ajouter un 3ème paramètre à cette fonction permettant de l\'utiliser dans les 2 sens (HT vers TTC ou TTC vers HT). <br>';


echo '<hr>';




?>