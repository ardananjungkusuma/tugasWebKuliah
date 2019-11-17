<!DOCTYPE html>
<html>

<head>
    <title>Res No 5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.js">
    </script>
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
                        <a href="no5.php" class="nav-link active">No 5</a>
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
                    if (isset($_POST["nama"])) {
                        echo "<div class='alert alert-primary' role='alert'>
                                   Successfully Registered!
                               </div>"; ?>
                        <center>
                            <h2><img src="img/logo2.jpg" style="width:200px; height:200px">
                                <h2>SERIKAT PEKERJA FORUM KOMUNIKASI PEKERJA<br>
                                    JASA PENUNJANG MIGAS DI PT.BADAK<br>
                                    (SP-FKPPM)</h2>
                                Jl. Hasanuddin Gg. Obsidian RT 27 No. 27 Berebas Tengah Bontang Selatan <br>
                                KOTA BONTANG KALIMANTAN TIMUR Telp. 0548-21996, Hp. 081255009493, 081253057093
                                <hr>
                        </center>
                        <?php
                            $nama = $_POST['nama'];
                            $alamat = $_POST['alamat'];
                            $noTelpHP = $_POST['noTelpHP'];
                            $noTelpRumah = $_POST['noTelpRumah'];
                            $noTelpKantor = $_POST['noTelpKantor'];
                            $unit = $_POST['unit'];
                            $ttl = $_POST['ttl'];
                            $alamat = $_POST['alamat'];
                            $target_path = "text/";
                            ?>
                        <h5>Nama : <?php echo $nama ?></h5>
                        <h5>Email : <?php echo $alamat ?></h5>
                        <h5>No Telpon HP : <?php echo $noTelpHP ?></h5>
                        <h5>No Telpon Rumah : <?php echo $noTelpRumah ?></h5>
                        <h5>No Telpon Kantor : <?php echo $noTelpKantor ?></h5>
                        <h5>Unit : <?php echo $unit ?></h5>
                        <h5>Tempat Tanggal Lahir : <?php echo $ttl ?></h5>
                        <h5>Alamat : <?php echo $alamat ?></h5><br>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Yang tertanda pada biodata diatas: </h4>
                            <p>Dengan secara sukarela, demokratis dan penuh kesadaran menyatakan diri sebagai Anggota Serikat Pekerja Forum Komunikasi Jasa Penunjang Migas di PT. Badak NGL (SP-FKKPM) dengan ketentuan sebagai berikut : </p>
                            <hr>
                            <p class="mb-0">
                                <ul>
                                    <li>Mematuhi dan mentaati Anggaran Dasar, Anggaran Rumah Tangga dan Peraturan Organisasi</li>
                                    <li>Membela dan menunjang tinggi nama baik organisasi</li>
                                    <li>Membayar uang iuran Rp.5000/Bulan</li>
                                </ul>
                                <br>
                                Demikian surat pernyataan ini saya isi dengan sebenar-benarnya agar dapat diterima menjadi Anggota SP-FKPPM.
                            </p>
                        </div>
                        <h5>Tertanda : </h5>
                        <?php
                            $target_path = $target_path . basename(
                                $_FILES['uploadedfile']['name']
                            );

                            if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
                                $image = $_FILES["uploadedfile"]["name"];
                                $img = "text/" . $image;
                                echo "<img style='width:125px;height:200px;border:1px solid black;' src=\"$img\"><br><br>";
                            } else {
                                echo "There was an error during uploading the file, please try again<br>";
                            }
                            ?>
                        Hormat Saya, <?php echo $nama ?>
                    <?php
                    } else {
                        echo "<h1 style='color:red;'>Maaf anda harus mengakses halaman ini dari No 5</h1>";
                        header("refresh:2;url=no5.php");
                    }
                    ?>

                </div>
            </div>
        </div>
    </main>
</body>

</html>