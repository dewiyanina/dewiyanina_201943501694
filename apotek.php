<?php
include "koneksi.php";

$q = "select * from apotek";
$ex = mysqli_query($db, $q);
echo "<a href='addapotek.php'>Tambah Data Obat</a>";
echo "<table border=1>";
echo "<tr>
<th>Nama Obat</th><th>Jenis Obat</th><th>Kegunaan Obat</th>
<th>Harga Obat</th><th>Action</th></tr>";
while ($r = mysqli_fetch_array($ex)){
    echo "<tr><td>".$r['nama']."</td>";
    echo "<td>".$r['jenis']."</td>";
    echo "<td>".$r['fungsi']."</td>";
    echo "<td>".$r['harga']."</td>";
    echo "<td><a href='editapotek.php?n=".$r['nama']."'> Ubah  </a>";
    echo "<a href='deleteapotek.php?n=".$r['nama']."'>  Hapus </a>";
    echo "</td></tr>";
}
echo "<table>";
?>