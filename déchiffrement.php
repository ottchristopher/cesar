<?php
    $alphabet = "abcdefghigklmnopqrstuvwxyz";
    $messageAdéChiffrer = $_POST["pikatchou2"];
    $cle = $_POST["charge2"]; 
    $longueurAlphabet = strlen($alphabet);

    $longeurDuMessageEnClair = strlen($messageAdéChiffrer);
    $chaineChiffree = [];

    //echo $longueurAlphabet;
    //echo $longeurDuMessageEnClair;

        // Boucle pour //
    for($i=0; $i<$longeurDuMessageEnClair; $i++){
        
        $j =strpos($alphabet, substr($messageAdéChiffrer, $i, 1));
        $j -= $cle;

        // echo $j; //

        while($j+1>$longueurAlphabet){
            $j =j-$longueurAlphabet;
        }

       $chaineChiffree[$i] = $alphabet[$j]; 

        // echo $alphabet[$j];    

    }

    $new = implode($chaineChiffree);

    setcookie("cesar2", $new, time()+5);
    header("location:http://cesar.test/iindex.php");


?> 