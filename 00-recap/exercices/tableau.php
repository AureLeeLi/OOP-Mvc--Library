 <?php 
 
//  $books= []; //tableau vide (1 dimension)
//  $books1 = [a,b,c]; //tableau numérique (1 dimension)
//  $books2 = [
//      'a' => 1,
//      'b' => 2,
//      'c' => 3,
//  ]; 
//  tableau associatif (1 dimension)

 //comment on peut afficher b?
// $books1[1];

 //comment on peut afficher 2?
// $books2['b'];

//comment parcourir le tableau $books2? foreach, while, for
// foreach($books2 as $index => $book){
//     echo $book.'-'.$index;  //1-a
// }

//tableau à 3 dimensions
$cars = [
    [
        'brand' => 'Porsche',
        'model' => 'Panamera S',
        'color' => 'Noire',
        'options' => ['Sièges chauffants', 'Toit ouvrant'],
    ],
    [
        'brand' => 'Peugeot',
        'model' => '308',
        'color' => 'Bleue',
        'options' => [],
    ],
    
];

//comment afficher toit ouvrant ?
// $cars[0]['options'][1];

foreach ($cars as $car){
    echo $car['brand'].' '.$car['model'].'<br>';
    echo 'Sa couleur est '.$car['color'].'<br>';
    echo count($car['options']). ' options <br>';
    foreach($car['options'] as $option){
        echo '- '.$option.'<br>';
    }
    echo '<hr> <br>';
}


//exercice 1
$capitales = [
    'France' => 'Paris',
    'Espagne' => 'Madrid',
    'Italie' => 'Rome',
];

// Afficher le résultat suivant en utilisant la boucle foreach :
foreach($capitales as $country => $capitale){
    echo 'La capitale de ' .$country. ' est ' .$capitale.'.<br>';
}
echo '<hr>';


//exercice 2
$population = [
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
];

// 1. Lister les pays ayant plus ou 20 millions d'habitants
foreach($population as $index => $pop){
    if($pop>20000000){
    echo  $index.' - '.$pop.'<br>';
    }
}

// 2. Donner la population totale des pays Européens
$sum = 0;
foreach($population as $country => $pop){
    if($country !== 'Mexique'){
        $sum += $pop;
    }
}
echo 'La population total est ' .$sum;
echo '<hr>';

//exercice 3
$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 1, 8, 9]
    ]
];
// 1 - Afficher la liste de tous les éléves avec leurs notes.
// Exemple :
// Matthieu a eu 10, 8, 16, 20, 17, 16, 15 et 2

foreach ($eleves as $eleve){
    echo $eleve['nom'] . ' a eu ';
    foreach($eleve['notes'] as $index => $note){
        echo $note;
        if ($index < count($eleve['notes'])- 2){
            echo ', ';
        } else if 
            ($index < count($eleve['notes'])- 1){
            echo ' et ';
        }
    }
    echo '<br>';
}
echo '<hr>';
// 2 - Calculer la moyenne de Jean. On part de $eleves[2]['notes']
// La fonction count permet de compter les éléments d'un tableau
// echo count($eleves[2]['notes']); 
// =7 Jean a 7 notes
//somme de ses notes divisée par 7

$sum = 0;
foreach ($eleves[2]['notes'] as $note){
    $sum += $note;
}
$moyenne = $sum / count($eleves[2]['notes']);

echo 'La moyenne de Jean est ' .round($moyenne, 2).'<br>';

$average = array_sum($eleves[2]['notes']) / count($eleves[2]['notes']);

echo '<hr>';

// 3/ Combien d'élèves ont la moyenne ?
// Exemple :
// Matthieu a la moyenne
// Jean n'a pas la moyenne
// Thomas a la moyenne
// Nombre d'éléves avec la moyenne : 2
$total = 0;
foreach ($eleves as $eleve){
    echo $eleve['nom'];
    $average = array_sum($eleve['notes']) / count($eleve['notes']);
    if($average >= 10){
        $total++;
        echo ' a la moyenne';
        echo '<br>';
    }
    else {
        echo ' n\'a pas la moyenne';
        echo '<br>';
    }  
}
echo 'Nombre d\'élèves ayant la moyenne :' .$total;
echo '<hr>';
// 4/ Quel(s) éléve(s) a(ont) la meilleure note ?
// Exemple: Thomas a la meilleure note : 19
$max = 0;
foreach ($eleves as $eleve){
    foreach($eleve['notes'] as $note){
        if($note>$max){
            $max=$note;
        }
    }
}
foreach ($eleves as $eleve){
    if (in_array($max, $eleve['notes'])){ //rechercher si une valeur existe dans un tableau (aiguille botte de foin);
        echo $eleve['nom']. ' a la meilleure note :' .$max .'<br>';
    }
}
echo '<hr>';
// 5/ Qui a eu au moins un 20 ?
// Exemple: Personne n'a eu 20
// Quelqu'un a eu 20
$hasTwenty = false;
foreach ($eleves as $eleve){
    foreach($eleve['notes'] as $note){
        if($note == 20){
            $hasTwenty = true;
            break 2; //end of foreach
        }  
    }
}
if ($hasTwenty){
    echo 'Quelqu\'un a eu 20 <br>';
}
else{
    echo 'Personne n\'a eu 20 <br>';
}

echo '<hr>';

?>