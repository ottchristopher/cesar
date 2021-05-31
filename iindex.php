<form method="POST" action="./chiffrement.php">

          <input type="text" name="pikatchou">

          <input type="number" name="charge">

          <input type="text" name="resultat" value="<?php echo $_COOKIE['cesar'] ?>" disabled >

          <input type="submit">

</form>

<form method="POST" action="./déchiffrement.php">

          <p><label>monstre <input type="text" name="pikatchou2">

          <p><label>déga <input type="number" name="charge2">

          <p><label>puicance <input type="text" name="resultat" value="<?php echo $_COOKIE['cesar2'] ?>" disabled >

          <p><label>resultat <input type="submit">

</form>