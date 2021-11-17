<?php
require_once '_connect.php';

$pdo = new PDO(DNS, DB_USER, DB_PSWD);

function addFriend(string $firstname, string $lastname)
{
    global $pdo;
    try {
        $sql = "INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function getFriends()
{
    global $pdo;
    $sql = "SELECT * FROM friend";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function checkStringEmpty(string $string) : bool
{
    return empty($string);
}

function checkStringLength(string $string, int $length = 45) : bool
{
    return mb_strlen($string) > $length;
}
