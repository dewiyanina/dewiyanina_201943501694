<?php
    include "koneksi.php";
    $nama = $_GET['n'];
    $q = "select * from apotek where nama='$nama'";
    $ex = mysqli_query($db ,$q);
    $r = mysqli_fetch_array($ex);
?>

<form action ="#" method="post">
    Nama Obat : <input type="text" name="tnama" value="<?php echo $r['nama']; ?>"/><br/>
    Jenis Obat : <input type="text" name="tjenis" value="<?php echo $r['jenis']; ?>"/><br/>
    Kegunaan Obat : <input type="text" name="tfungsi" value="<?php echo $r['fungsi']; ?>"/><br/>
    Harga Obat : <input type="text" name="tharga" value="<?php echo $r['harga']; ?>"/><br/>
    <input type="submit" name="bok" value="Ubah Data"/>
</form>
<a href="apotek.php">Kembali ...</a>

<?php
    if (isset ($_POST['bok'])){
        $nama = $_POST['tnama'];
        $jenis = $_POST['tjenis'];
        $fungsi = $_POST['tfungsi'];
        $harga = $_POST['tharga'];
        $q = "UPDATE apotek SET nama='$nama', jenis='$jenis', fungsi='$fungsi', harga='$harga' WHERE nama='$nama'";
        mysqli_query($db, $q);
        echo "Data berhasil diubah";

    }
?>