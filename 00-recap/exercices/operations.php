<!-- Stocker 15 dans une variable.
Stocker 5 dans une autre variable.
Stocker 8 dans une autre variable.
Afficher ceci dans la page (en dynamique) :
​15 + 5 + 8 = 28

15 x (8 - 5) = 45

(8 + 5) / 15 = 0.86

Si une des opérations a un résultat inférieur à 20, afficher "Une des opérations renvoie moins de 20" en bas de la page -->

<?php
$var1 = 15;
$var2 = 5;
$var3 = 800;

echo $result1 = $var1.' + '.$var2. ' + '.$var3. ' = ' .$var1+$var2+$var3. '<br>';
echo $result2 = $var1. ' x ('.$var3. ' - ' .$var2. ') = ' .$var1*($var3-$var2). '<br>';
echo $result3 = '('.$var3. ' + '.$var2.') / ' .$var1. ' = ' .round(($var3+$var2)/$var1, 2). '<br>';

if ($result1 <20 || $result2 <20 || $result3 <20){
    echo 'Une des opérations renvoie moins de 20.';
}

?>