<?php
require_once '_connect.php';
require_once 'function.php';

$pdo = new PDO(DNS, DB_USER, DB_PSWD);

$friends = getFriends();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 11</title>
</head>

<body>
    <div>
        <h1>Challenge 11</h1>
        <h2>Liste des amis</h2>
        <ul>
            <?php foreach ($friends as $friend) : ?>
                <li>
                    <?= $friend['firstname'] . ' ' . $friend['lastname'] ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div>
        <form action="addFriend.php" method="post">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname" required>
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname" required>
            <input type="submit" value="Ajouter">
        </form>
    </div>
</body>

</html>