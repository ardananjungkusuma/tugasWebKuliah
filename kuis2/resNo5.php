<!DOCTYPE html>
<html>
    <head><title>Res No 5</title>
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
                <div class="alert alert-primary" role="alert">
                    Successfully Registered!
                </div>
                <div class="container" style="padding: 20px; margin: 10 px auto; margin-left: auto; margin-right: auto;">
                    <div class="row">
                        <div class="col-lg-12">
                        <?php
                            $nama = $_POST['nama'];
                            $alamat = $_POST['alamat'];
                            $noTelpHP = $_POST['noTelpHP'];
                            $noTelpRumah = $_POST['noTelpRumah'];
                            $noTelpKantor = $_POST['noTelpKantor'];
                            $unit = $_POST['unit'];
                            $ttl = $_POST['ttl'];
                            $alamat = $_POST['alamat'];
                            echo "<h2><b>Information User</b><hr></h2><br>";
                            $target_path = "text/";
                            $target_path = $target_path . basename(
                                $_FILES['uploadedfile']['name']);

                            if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)){
                                $image = $_FILES["uploadedfile"]["name"]; 
                                $img = "text/".$image;
                                echo "<center><img style='width:200px;height:300px;border:1px solid black;' src=\"$img\"><br><br></center>";
                            }else{
                                echo "There was an error during uploading the file, please try again<br>";
                            }
                            echo "Name : ".$nama."<br>";
                            echo "Email : ".$alamat."<br>";
                            echo "No Telpon HP: ".$noTelpHP."<br>";
                            echo "No Telp Rumah: ".$noTelpRumah."<br>";
                            echo "No Telp Kantor : ".$noTelpKantor."<br>";
                            echo "Unit : ".$unit."<br>";
                            echo "Tempat Tanggal Lahir : ".$ttl."<br>";
                            echo "Alamat : ".$alamat."<br>";
                        ?><br>
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
                                Tertanda Admin Website
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>   
    </body>
    </html>