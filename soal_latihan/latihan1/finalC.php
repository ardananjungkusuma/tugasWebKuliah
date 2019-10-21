<!DOCTYPE html>
<html>
    <head><title>Index Bootstrap</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="assets/js/bootstrap.bundle.js"></script>
        <style>
            .imgMe {
                height: 300px;
                background: #aaa;
            }
        </style>
    </head>
    <body>
        <header>
            <nav id="webMaps" class="navbar-dark bg-dark" style="padding-left:16px;">
                <a href="ardananjungkusuma.blogspot.com" target="_blank" class="navbar-brand">
                    <img src="img/group.png" alt="logo" width="30px" height="30px"> Ardan Maps
                </a>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="color: black;">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="indexBoot.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="mapsBoot.html" class="nav-link">Maps</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.freecodecamp.org/" class="nav-link">Free Code Camp</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container" style="padding: 20px;">
                <div class="row">
                    <div class="col-lg-12">
                    <?php
                    $catService = $_POST['catService'];
                    $catEat = $_POST['catEat'];
                    $datepick = $_POST['datepick'];
                    $nama = $_POST['nama'];
                    $phone_number = $_POST['phone_number'];
                    $message = $_POST['message'];
                    $email = $_POST['email'];

                    echo "Service : ".$catService."<br>";
                    echo "Eat : ";
                    foreach($catEat as $catEat){
                        echo($catEat." ");
                    }
                    echo "<br>";
                    echo "Date : ".$datepick."<br>";
                    echo "Name : ".$nama."<br>";
                    echo "Phone Number : ".$phone_number."<br>";
                    echo "Message : ".$message."<br>";
                    echo "Email : ".$email."<br>";
                    ?>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>