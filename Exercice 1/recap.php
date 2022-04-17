<?php
    $nom = strip_tags($_POST["nom"]);
    $prenom = strip_tags($_POST["prenom"]);
    $number = strip_tags($_POST["nombre"]);
    $adresse = strip_tags($_POST["adresse"]);
    $PU = 4;
    $PT = $number * $PU;
    if ($number > 10){
        $PT = $PT * 0.9;
    }
    $type = $_POST["types"];
    $harissa = "";
    if (array_key_exists("harissa",$_POST)){
        $harissa = "Harissa";
    }
    $salade = "";
    if (array_key_exists("salade",$_POST)){
        $salade = "Salade";
    }
    $mayo = "";
    if (array_key_exists("mayo",$_POST)){
        $mayo = "Mayonnaise";
    }
    $Suppl = $harissa." ".$mayo." ".$salade;
    echo "<h2>Votre Commande</h1>";
    echo $nom." ".$prenom."<br>".$adresse."<br>".$number." Sandwichs ".$type.", + Supplement : ".$Suppl."<br>".$PT." DT <br>    ";
    
    $file = $_FILES['CIN'];
    print_r($file);
    //Gestion du fichier uploaded    
    $fileName = $file['name'];
    $fileTmpLocation = $file['tmp_name'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));
    $fileNewName = uniqid('',true).'.'.$fileExtension;
    $fileDestination = 'upload/'.$fileNewName;
    move_uploaded_file($fileTmpLocation,$fileDestination);
    // header("Location: index.html?uploadSuccessful");



?>

