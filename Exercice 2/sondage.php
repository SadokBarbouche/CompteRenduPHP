<?php
    if(array_key_exists("visite",$_COOKIE)){
        echo "<center>.vous avez déja voté !<br></center>";
        echo "<center>.votre vote etait ".$_COOKIE['visite']."</center>";
    }   
    else{
        $arr = $_POST['vote'];
        setcookie('visite',$arr,time()+120);
        echo "<center>vous etes entrain de voter . !<br></center>";
        echo "<center>".$arr."</center>";
    }
    
?>