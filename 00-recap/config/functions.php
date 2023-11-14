<?php
/**
 * permet de calculer un prix TTC
 */
function price($preTaxPrice,$discount = 0){
    global $db;
    $taxPrice = $preTaxPrice * (1+ 20/100) * (1 - $discount/100); //45.6
    $taxPrice = number_format($taxPrice, 2, ',', ' '); //1450.6 devient 1 450,60
    return $taxPrice;
}

/**
 * permet de formater un ISBN.
 * 10 ou 13 caractères
 * 8248827583739 => 8-248827-583739
 * 824882758373 => 8-2488-2758-3
 */
function isbn($numbers){
        global $db;
        $result = substr($numbers, 0, 1); // 8

    if(strlen($numbers)===13){
        $result = $result.'-'.substr($numbers, 1, 6); //8-248827
        $result = $result.'-'.substr($numbers, 7, 6); //8-248827-583739
        return $result;
    }
    else{
        $result = $result.'-'.substr($numbers, 1, 4); //8-2488
        $result = $result.'-'.substr($numbers, 5, 4); //8-2488-2758
        $result = $result.'-'.substr($numbers, 9, 10); //8-2488-2758
        
        return $result;
    }
}

/**
 * Permet de récupérer un livre dans la BDD grâce à l'id.
 */
function getBook(int $id) {
    global $db; // Pour utiliser une variable qui est
    // déclarée hors de la fonction

    $query = $db->prepare('SELECT * FROM books WHERE id = :modif');
    $query->execute(['modif' => $id]);

    return $query->fetch();
}

/**
 * fonction message session
 */
 function addMessage($message){
    $_SESSION['message'] = $message;
 }

/**
 * fonction si message session
 */
function getMessage(){
    $message = $_SESSION['message'] ?? null;
    unset($_SESSION['message']); //supprimer le message de la session
    return $message;
}

/**
 * fonction de redirection
 */
function redirect($url){
    header('Location: '.$url);
}

/**
 * fonction INSERT pour ajouter un livre
 */
function insert($sql,$params){
    global $db;
    $query = $db->prepare($sql);
    return $query->execute($params); //return si la requête s'est bien passée
}
/**
 * fonction UPDATE pour ajouter un livre
 */
function update($sql,$params){
    global $db;
    $query = $db->prepare($sql);
    return $query->execute($params); //return si la requête s'est bien passée
}
?>