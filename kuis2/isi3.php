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
                            <h1>Create Account Register</h1>
                            <form method="POST" action="resIsi3.php">
                                Your Name: <input type="text" placeholder="ardan anjung" name="name" required><br><br>
                                Email ID: <input type="text" placeholder="ardananjung@gmail.com" name="email" type="email" required><br><br>
                                Alternate Email ID: <input type="text" placeholder="ardan@gmail.com" name="email2"><br><br>
                                Your Phone: <input type="text" placeholder="Country Code" name="countryCode"><input type="text" placeholder="City Code" name="cityCode"><input type="text" placeholder="Phone Number" name="phoneNumber"><br><br>
                                Mobile Phone: <input type="text" placeholder="085258967800" name="mobilePhoneNumber"><br><br>
                                Your Postal Address : <textarea style="height: 40px;" name="postalAddress"></textarea><br><br>
                                Country : <select id = "myList" name="myList">
                                        <option value = "indonesia">Indonesia</option>
                                        <option value = "usa">USA</option>
                                        <option value = "russia">Russia</option>
                                </select><br><br>
                                Password: <input type="password" placeholder="blabla" name="password" type="password" required><br><br>
                                Re-Enter Password: <input type="password" placeholder="blabla" name="password2" type="password" required><br><br>
                                <input type="checkbox">Save My Email and Password<br>
                                Already Registered? Login Here<br><br>
                                <button type="submit" class="btn btn-info" value="Kirim">Continue</button>
                                <button type="reset" class="btn btn-danger" value="Reset">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>   
    </body>
    </html>