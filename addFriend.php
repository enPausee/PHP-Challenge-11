<?php

require_once '_connect.php';
require_once 'function.php';

$pdo = new PDO(DNS, DB_USER, DB_PSWD);

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];

if (!checkStringEmpty($fname) && !checkStringEmpty($lname)) {       //vérifie si l'entré n'est pas vide
    if (!checkStringLength($fname) && !checkStringLength($lname))   //vérifie si l'entré ne dépasse pas 45 caractères
    {
        addFriend($fname, $lname);
    }
}

header('Location: ../index.php');
