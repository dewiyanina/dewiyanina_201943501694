<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Selamat Datang
</title>
  </head>
  <body>

<?php
    include "koneksi.php";
?>

<form action="#" method="post">
<table><tr>
    <td>Nama Obat : <input type="text" name="tnama"/><br/></td>
    <td>Jenis Obat : <input type="text" name="tjenis"/><br/></td>
    <td>Kegunaan Obat : <input type="text" name="tfungsi"/><br/></td>
    <td>Harga Obat : <input type="text" name="tharga"/><br/></td>
    <input type="submit" name="bok" value="Simpan"/>
</form>
<a href="apotek.php">Kembali ...</a>
<?php
    if (isset ($_POST['bok'])){
        $nama = $_POST['tnama'];
        $jenis = $_POST['tjenis'];
        $fungsi = $_POST['tfungsi'];
        $harga = $_POST['tharga'];
        $q = "insert into apotek values('$nama','$jenis','$fungsi','$harga')";
        mysqli_query($db, $q);
        echo "Data tersimpan";
    }
?>


    
	<div class="global-container">
		<div class="card login-from">
			<div class="card-body">
				<h1 class="card-title text-center">L O G I N</h1>
			</div>
			<div class="card-text">
			<div class="card justify-content-center" style="width: 18rem;">
  <img src="IMG_20190604_044349.jpg" class="card-img-top" alt="...">
  <div class="card-body">

    
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </table>
  </body>
</html>