<?php 

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$id_pasien = $_POST['id_pasien'];
	$nama = $_POST['nama'];
	$kelamin = $_POST['kelamin'];
	$umur = $_POST['umur'];
	$telp = $_POST['telp'];
	$alamat = $_POST['alamat'];
	$keluhan = $_POST['keluhan'];
	$suhu = $_POST['suhu'];
	$id_level = 2;

	$sql = "UPDATE pasien SET nama='$nama', kelamin='$kelamin',umur='$umur', telp='$telp', alamat='$alamat', keluhan='$keluhan', suhu='$suhu',id_level=$id_level where id_pasien = $id_pasien";

	$res = mysqli_query($kon, $sql);

	$count = mysqli_affected_rows($kon);

	if($count){
		echo "<script>alert('Data berhasil diganti');window.location='index.php';</script>";
	}

	
}else{
	header("location: tambah.php");
}
if(isset($_POST["kembali"])){
	header("location: index.php");
}
?>
