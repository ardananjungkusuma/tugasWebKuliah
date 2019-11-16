<!DOCTYPE html>
<html>
    <head><title>No 3</title>
        <style>
            th,td{
                padding : 10px;
            }
        </style>
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
                            <table>
                                <tr>
                                    <td>Your Name : </td>
                                    <td><input type="text" placeholder="Ardan Anjung" name="name" required></td>
                                </tr>
                                <tr>
                                    <td>Email ID : </td>
                                    <td><input type="email" placeholder="ardananjung@gmail.com" name="email" type="email" required></td>
                                </tr>
                                <tr>
                                    <td>Alternate Email ID : </td>
                                    <td><input type="email" placeholder="ardan@gmail.com" name="email2"></td>
                                </tr>
                                <tr>
                                    <td>Your Phone : </td>
                                    <td><input type="number" placeholder="Country Code" required name="countryCode"><input type="number" required placeholder="City Code" name="cityCode"><input type="number" required placeholder="Phone Number" name="phoneNumber"></td>
                                </tr>
                                <tr>
                                    <td>Mobile Phone : </td>
                                    <td><input type="number" placeholder="085258967800" name="mobilePhoneNumber" required></td>
                                </tr>
                                <tr>
                                    <td>Your Postal Address : </td>
                                    <td><textarea style="height: 60px; width: 280px;" name="postalAddress"></textarea></td>
                                </tr>
                                <tr>
                                    <td>Country : </td>
                                    <td><select id = "myList" name="myList">
                                        <option value = "indonesia">Indonesia</option>
                                        <option value = "usa">USA</option>
                                        <option value = "russia">Russia</option>
                                </select></td>
                                </tr>
                                <tr>
                                    <td>Password : </td>
                                    <td><input type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password" type="password" required></td>
                                </tr>
                                <tr>
                                    <td>Re-Enter Password : </td>
                                    <td><input type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password2" type="password" required></td>
                                </tr>
                            </table>
                            <br>
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