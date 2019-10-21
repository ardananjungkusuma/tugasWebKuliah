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
                    <form method="POST" action="finalC.php">
                        <b>Select Category</b><br>
                        <input type="radio" name="catService" value="VIP">VIP<br>
                        <input type="radio" name="catService" value="Premium">Premium<br>
                        <input type="radio" name="catService" value="Basic">Basic<br><br>
                        <b>Select</b><br>
                        <input type="checkbox" name="catEat[]" value="Breakfast">Breakfast<br>
                        <input type="checkbox" name="catEat[]" value="Lunch">Lunch<br>
                        <input type="checkbox" name="catEat[]" value="Dinner">Dinner<br><br>
                        Date : <input type="date" name="datepick" required><br><br>
                        Name : <input type="text" placeholder="Ardan Anjung" name="nama" required><br><br>
                        Phone : <input type="number" placeholder="6285258967800" name="phone_number" required><br><br>
                        <textarea placeholder="Message : " style="height: 40px;" name="message"></textarea><br><br>
                        Send Email To : <input type="email" placeholder="ardananjungkusuma@gmail.com" name="email" required><br><br>
                        <button type="submit" value="Kirim">Kirim</button>
                        <button type="reset"value="Reset">Reset</button>
                    </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>