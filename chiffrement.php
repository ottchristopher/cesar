<?php
    $alphabet = "abcdefghigklmnopqrstuvwxyz";
    $messageAChiffrer = $_POST["pikatchou"];
    $cle = $_POST["charge"]; 
    $longueurAlphabet = strlen($alphabet);

    $longeurDuMessageEnClair = strlen($messageAChiffrer);
    $chaineChiffree = [];

    //echo $longueurAlphabet;
    //echo $longeurDuMessageEnClair;

        // Boucle pour //
    for($i=0; $i<$longeurDuMessageEnClair; $i++){
        
        $j =strpos($alphabet, substr($messageAChiffrer, $i, 1));
        $j += $cle;

        // echo $j; //

        while($j+1>$longueurAlphabet){
            $j =j-$longueurAlphabet;
        }

       $chaineChiffree[$i] = $alphabet[$j]; 

        // echo $alphabet[$j];    

    }

    $new = implode($chaineChiffree);

    setcookie("cesar", $new, time()+5);
    header("location:http://cesar.test/iindex.php");


?> 