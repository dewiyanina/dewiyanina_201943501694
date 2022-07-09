<?php
include "koneksi.php";
$nama = $_GET['n'];

$q = "delete from apotek where nama='$nama'";
mysqli_query($db, $q);
echo "Data terhapus\n";
echo "<a href='apotek.php'>kembali ...</a>";

?>