<!DOCTYPE html>
<html>

<head>
    <title>No 1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
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
                        <a href="array1.php" class="nav-link active">No 1</a>
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
                    <center>
                        <h2>Multidimensional Array</h2>
                    </center><br>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Pembeli</th>
                            <th>Barang</th>
                            <th>Tanggal</th>
                            <th>Harga</th>
                        </tr>
                        <?php
                        $Pembeli = array(
                            array("1", "Anton", "Televisi", "07 September 2016", "2.500.000"),
                            array("2", "Bryan", "Mesin Cuci", "10 Juli 2016", "1.500.000"),
                            array("3", "Cherly", "Dispenser", "", "950.000"),
                            array("4", "Ardan", "Kulkas2", "29 Saptember 2019", "1.000.000"),
                            array("5", "Dean", "Kulkas", "15 September 2016", "1.750.000"),
                            array("6", "Budi", "", "11 Oktober 2016", "450.000")
                        );
                        echo "<tr>";
                        echo "<td>" . $Pembeli[0][0] . "</td>";
                        echo "<td>" . $Pembeli[0][1] . "</td>";
                        echo "<td>" . $Pembeli[0][2] . "</td>";
                        echo "<td>" . $Pembeli[0][3] . "</td>";
                        echo "<td>" . $Pembeli[0][4] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[1][0] . "</td>";
                        echo "<td>" . $Pembeli[1][1] . "</td>";
                        echo "<td>" . $Pembeli[1][2] . "</td>";
                        echo "<td>" . $Pembeli[1][3] . "</td>";
                        echo "<td>" . $Pembeli[1][4] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[2][0] . "</td>";
                        echo "<td>" . $Pembeli[2][1] . "</td>";
                        echo "<td>" . $Pembeli[2][2] . "</td>";
                        echo "<td>" . $Pembeli[2][3] . "</td>";
                        echo "<td>" . $Pembeli[2][4] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[3][0] . "</td>";
                        echo "<td>" . $Pembeli[3][1] . "</td>";
                        echo "<td>" . $Pembeli[3][2] . "</td>";
                        echo "<td>" . $Pembeli[3][3] . "</td>";
                        echo "<td>" . $Pembeli[3][4] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[4][0] . "</td>";
                        echo "<td>" . $Pembeli[4][1] . "</td>";
                        echo "<td>" . $Pembeli[4][2] . "</td>";
                        echo "<td>" . $Pembeli[4][3] . "</td>";
                        echo "<td>" . $Pembeli[4][4] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[5][0] . "</td>";
                        echo "<td>" . $Pembeli[5][1] . "</td>";
                        echo "<td>" . $Pembeli[5][2] . "</td>";
                        echo "<td>" . $Pembeli[5][3] . "</td>";
                        echo "<td>" . $Pembeli[5][4] . "</td>";
                        echo "</tr>";
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>