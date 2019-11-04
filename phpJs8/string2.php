<!DOCTYPE HTML>
<html>
    <head></head>
    <body>
        <?php
            $numberedString = "12345678901234567890234567890";
            $fivePos = strpos($numberedString,"5");
            echo "Posisi angka 5 didalam string dalam $fivePos";
            $fivePos2 = strpos($numberedString,"5",$fivePos+1);
            echo "<br>Posisi angka5 yang kedua didalam string adalah 
            $fivePos2";
        ?>
    </body>
</html>