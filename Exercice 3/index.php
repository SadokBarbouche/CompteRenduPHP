<?php 
session_start();
if (!isset($_SESSION['notes'])){
    $_SESSION['notes'] = [];
}
if (isset($_POST['titre']) && isset($_POST['note'])){
    $_SESSION['notes'][] = ['titre' => $_POST['titre'], 'note' => $_POST['note']]; 
}
//print_r($_SESSION);
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Keep v0</title>
</head>
<body>
<center>
<h2 class="notes-card-title">Mes Notes</h2>
<?php
    foreach ($_SESSION['notes'] as $note):
?>
    <div class="notes-card-item">
        <b>Titre: <?= $note['titre'] ?></b>
        <div><b>Description: </b><?= $note['note'] ?></div>
        <br>
        </div>
<?php
    endforeach
?>
<form action="" method="POST">
    <input type="text" class="input-field" name="titre" placeholder="Titre" required>
    <br>
    <br>
    <textarea name="note" class="input-field" rows="2" placeholder="Description" required></textarea>
    <br>
    <button type="submit" class="btn">Submit</button>
</form>
</center>

</body>
</html>