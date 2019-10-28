<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            $langganan = $_POST['langganan'];
            $jumlahLembar = $_POST['jumlahLembar'];
            echo "<b>Rincian Harga</b><hr><br>";
            echo "Status Langganan: ".$langganan."<br>";
            echo "Jumlah Lembar : ".$jumlahLembar."<br>";      
            
            if($langganan == "Langganan"){
                $lembarHarga = 190;
                $totalHarga = $jumlahLembar * $lembarHarga;
                echo "Total Harga : ".$totalHarga."<br>";
            }else if($langganan == "Tidak Langganan"){
                if($jumlahLembar<150){
                    $lembarHarga = 300;
                }else if($jumlahLembar >= 150){
                    $lembarHarga = 250;
                }
                $totalHarga = $jumlahLembar * $lembarHarga;
                echo "Total Harga : ".$totalHarga."<br>";
            }
        ?><br>
        <a href="2.html"><button>Back To Serice Menu</button></a>

    </body>
</html>