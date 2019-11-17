<!DOCTYPE html>
<html>

<head>
    <title>No 2</title>
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
                        <a href="rumusIndex.php" class="nav-link active">No 2</a>
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
                    @$jari_jari = $_REQUEST['jari-jari'];
                    $volume = 4 / 3 * 22 / 7 * $jari_jari * $jari_jari * $jari_jari;
                    ?>
                    <h2>Menghitung Volume Bola</h2>
                    <form method="GET">
                        <table>
                            <tr>
                                <td>Jari Jari: </td>
                                <td>=</td>
                                <td><input type="number" required name="jari-jari" value="<?php echo $jari_jari; ?>" />cm<br /></td>
                            </tr>
                        </table>
                        <br>
                        <button type="submit" class="btn btn-info" value="Calculate">Calculate</button><br /><br />
                        <?php
                        echo "Volume Bola = " . $volume . " cm³ <br/>";
                        echo "Ulangi? <a href='Bola.php'>Y</a> / <a href='rumusIndex.php'>N</a>";
                        ?>
                    </form>
                </div>
            </div>
    </main>
</body>

</html>