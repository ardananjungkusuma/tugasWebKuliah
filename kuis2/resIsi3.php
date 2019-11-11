<!DOCTYPE html>
<html>
    <head><title>No 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="assets/js/bootstrap.bundle.js"></script>
        </style>
    </head>
    <body>
        <header>
            <nav id="webMaps" class="navbar-dark bg-dark" style="padding-left:16px;">
                <a href="https://ardananjungkusuma.github.io/" target="_blank" class="navbar-brand">
                    <img src="img/group.png" alt="logo" width="30px" height="30px"> Kuis Ardan
                </a>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="color: black;">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                                    <a href="array1.php" class="nav-link">No 1</a>
                                </li>
                                <li class="nav-item">
                                    <a href="rumusIndex.php" class="nav-link">No 2</a>
                                </li>
                                <li class="nav-item">
                                    <a href="no3.php" class="nav-link">No 3</a>
                                </li>
                                <li class="nav-item">
                                    <a href="no4final.php" class="nav-link">No 4</a>
                                </li>
                                <li class="nav-item">
                                    <a href="no5.php" class="nav-link">No 5</a>
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
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $email2 = $_POST['email2'];
                            $countryCode = $_POST['countryCode'];
                            $cityCode = $_POST['cityCode'];
                            $phoneNumber = $_POST['phoneNumber'];
                            $mobilePhoneNumber = $_POST['mobilePhoneNumber'];
                            $postalAddress = $_POST['postalAddress'];
                            $myList = $_POST['myList'];
                            $password = $_POST['password'];
                            $password2 = $_POST['password2'];
                            echo "<h2><b>Information User</b><hr></h2><br>";
                            echo "Name : ".$name."<br>";
                            echo "Email : ".$email."<br>";
                            echo "Alternate Email: ".$email2."<br>";
                            echo "Country Code: ".$countryCode."<br>";
                            echo "City Code : ".$cityCode."<br>";
                            echo "Phone Number : ".$phoneNumber."<br>";
                            echo "Mobile Phone Number : ".$mobilePhoneNumber."<br>";
                            echo "Postal Address : ".$postalAddress."<br>";
                            echo "Country : ".$myList."<br>";
                            echo "Password : ".$password."<br>";
                        ?><br>
                        </div>
                    </div>
                </div>
            </main>   
    </body>
    </html>