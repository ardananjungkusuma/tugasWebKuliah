<?php
include "koneksi.php";

$id = $_GET['id'];
$query = "delete from mahasiswa where id='$id'";
$result = mysqli_query($connect, $query);

if ($result) {
    echo "Data Berhasil Dihapus";
    ?>
    <a href="homeCRUD.php">Lihat data di Tabel</a>
<?php
} else {
    echo "Data gagal Dihapus " . mysqli_error($connect);
}
?>