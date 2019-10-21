<!DOCTYPE html>
<html>
    <head>
        <title>Pilihan Customer</title>
        <script>
            function thankYou(){
                alert("Thank You")
            };
        </script>
    </head>
    <body>
        <?php
             $makanan = $_POST['makanan'];

             if($makanan == "A"){
                echo "Anda Memilih Soto";
             }else if($makanan == "B"){
                echo "Anda Memilih Rawon";
             }else if($makanan == "C"){
                echo "Anda Memilih Nasi Goreng";
             }else if($makanan == "D"){
                echo "Anda Memilih Gudeg";
             }else if($makanan == "E"){
                echo "Anda Memilih Sayur Lodeh";
             }else{
                 echo "Masukan Pilihan Yang Benar";
             }
             echo "<br>"; 
        ?>
        <h3>Apakah Anda Ingin Memesan Lagi?</h3>
        <a href="1.html"><button>Y</button></a>
        <button onclick="thankYou()">T</button>
    </body>
</html>