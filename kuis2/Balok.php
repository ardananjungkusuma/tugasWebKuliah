<!DOCTYPE html>
<html>
    <head><title>No 2</title>
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
                            @$panjang = $_GET['panjang'];
                            @$lebar = $_GET['lebar'];
                            @$tinggi = $_GET['tinggi'];
                            $volume = $panjang * $lebar * $tinggi;
                        ?>
                        <form method="GET">
                        <table>
                            <tr>
                                <td>Panjang</td>
                                <td>=</td>
                                <td><input type="text" name="panjang" value="<?php echo $panjang; ?>"/>cm<br/></td>
                            </tr>
                            <tr>
                                <td>Lebar</td>
                                <td>=</td>
                                <td><input type="text" name="lebar" value="<?php echo $lebar; ?>"/>cm<br/></td>
                            </tr>
                            <tr>
                                <td>Tinggi</td>
                                <td>=</td>
                                <td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/></td>
                            </tr>
                        </table>
                        <br>
                        <button type="submit" class="btn btn-info" value="Calculate">Calculate</button><br/><br/>
                        <?php
                            echo "Volume Balok = ".$volume." <br/>";
                            echo "Ulangi? <a href='Balok.php'>Y</a> / <a href='rumusIndex.php'>N</a>";
                        ?>
                        </form>
                    </div>
                </div>
            </main>   
    </body>
    </html>