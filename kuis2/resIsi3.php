<!DOCTYPE html>
<html>

<head>
    <title>No 3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
    <style>
        h5 {
            text-align: left;
        }

        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid white;
            margin: 1em 0;
            padding: 0;
        }
    </style>
</head>

<body background="img/bg.jpg">
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
                        <a href="no3.php" class="nav-link active active">No 3</a>
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
                    if (isset($_POST["name"])) {
                        ?>
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
                            ?>
                        <center>
                            <h2 style="color:white"><b>Information User</b>
                                <hr>
                            </h2>
                        </center>
                        <center>
                            <div class="card" style="width: 50rem;">
                                <img class="card-img-top" style="width:100px; height:100px; padding:13px;" src="img/login-ardan.png" alt="ardan_login">
                                <div class="card-body" style="padding: 10px;">
                                    <p class="card-text">
                                        <h5>Nama : <?php echo $name ?></h5>
                                        <h5>Email : <?php echo $email ?></h5>
                                        <h5>Alternate Email : <?php echo $email2 ?></h5>
                                        <h5>Country Code : <?php echo $countryCode ?></h5>
                                        <h5>City Code : <?php echo $cityCode ?></h5>
                                        <h5>Phone Number : <?php echo $phoneNumber ?></h5>
                                        <h5>Mobile Phone Number : <?php echo $mobilePhoneNumber ?></h5>
                                        <h5>Postal Address : <?php echo $postalAddress ?></h5>
                                        <h5>Country : <?php echo $myList ?></h5>
                                        <h5>Password : <?php echo $password ?></h5>
                                    </p>
                                </div>
                            </div>
                        </center>
                    <?php
                    } else {
                        echo "<h1 style='color:red;'>Maaf anda harus mengakses halaman ini dari No 3</h1>";
                        header("refresh:2;url=no3.php");
                    }
                    ?>

                </div>
            </div>
        </div>
    </main>
</body>

</html>