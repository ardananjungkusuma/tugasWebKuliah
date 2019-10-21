<!DOCTYPE html>
<html>
    <head><title>Result No1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="assets/js/bootstrap.bundle.js"></script>
    </head>
    <body background="img/bg.jpg" style="color:white;"> 
        <header>
            <nav id="webMaps" class="navbar-dark bg-dark" style="padding-left:16px;">
                <a href="https://ardananjungkusuma.github.io/" target="_blank" class="navbar-brand">
                    <img src="img/group.png" alt="logo" width="30px" height="30px"> UTS Ardan
                </a>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="color: black;">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="no1.html" class="nav-link">No 1</a>
                        </li>
                        <li class="nav-item">
                            <a href="no2.html" class="nav-link">No 2</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container" style="padding: 20px; margin: 10 px auto; margin-left: auto; margin-right: auto;">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                            $catService = $_POST['catService'];
                            $datepick = $_POST['datepick'];
                            $namaAwal = $_POST['namaAwal'];
                            $namaAkhir = $_POST['namaAkhir'];
                            $phone_number = $_POST['phone_number'];
                            $message = $_POST['message'];
                            $email = $_POST['email'];
                            echo "<b>Your Order has been completed!</b><hr><br>";
                            echo "Service : ".$catService."<br>";
                            echo "Date : ".$datepick."<br>";
                            echo "Name Awal: ".$namaAwal."<br>";
                            echo "Name Akhir: ".$namaAkhir."<br>";
                            echo "Phone Number : ".$phone_number."<br>";
                            echo "Message : ".$message."<br>";
                            echo "Email : ".$email."<br>";
                        ?><br>
                        <a href="no1.html"><button class="btn btn-success">Back To Serice Menu</button></a>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>