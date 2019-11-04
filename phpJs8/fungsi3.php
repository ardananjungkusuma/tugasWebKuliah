<!DOCTYPE HTML>
<html>
    <head></head>
    <body>
        <h2>Fungsi Menghitung Luas Lingkaran</h2>
        <?php
            echo "Luas lingkaran dengan jari jari 7cm adalah 
            ".luasLingkaran(7)." cm";

            function luasLingkaran($jari2){
                return 3.14*$jari2*$jari2;
            }
        ?>
    </body>
</html>