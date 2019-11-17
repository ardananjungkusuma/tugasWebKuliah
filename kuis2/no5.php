<!DOCTYPE html>
<html>

<head>
    <title>No 5</title>
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
                    <center>
                        <h1>SP-FKPPM Website Registration</h1><br>
                    </center>
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="resNo5.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nama">Nama Anda:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="alamat">No Pekerja:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="alamat" name="alamat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="noTelpHP">No Telepon HP:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="noTelpHP" name="noTelpHP" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="noTelpRumah">No Telepon Rumah:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="noTelpRumah" name="noTelpRumah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="noTelpKantor">No Telepon Kantor:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="noTelpKantor" name="noTelpKantor">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="unit">Unit : </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="unit" name="unit" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="ttl">Tempat Tanggal Lahir: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ttl" name="ttl" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="alamat">Alamat : </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>
                        </div>
                        <label class="control-label col-sm-2" for="foto">Upload Foto :</label>
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span>Choose file</span>
                                <input type="file" name="uploadedfile" required>
                            </div>
                            <br>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success" value="Simpan">Simpan</button>
                        <button type="reset" class="btn btn-danger" value="Reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>