<html>

<head></head>

<body>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = "select * from mahasiswa where id='$id'";
    $result = mysqli_query($connect, $query);
    ?>

    <form action="prosesEdit.php" method="GET">
        <table>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td>ID: </td>
                    <td><input type="text" name="id" value="<?php echo $row['id']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama : </td>
                    <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat : </td>
                    <td><textarea name="alamat" cols="20" rows="5"><?php echo $row['alamat']; ?></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
        </table>
    <?php
    }
    ?>
    </form>
</body>

</html>