<?php
include "koneksi.php";
$var_jdl = $_POST['txt_judul'];
$var_des = $_POST['txt_des'];
$var_gambar="pic-".time().".jpg";
$get_gambar = $_FILES['file_gambar']['tmp_name'];
// jika tombol simpan di klik btn-simpan
if (isset($_POST['btn_simpan'])){
	move_uploaded_file($get_gambar, "images/". $var_gambar);
	$query ="INSERT INTO tb_galeri (judul,deskripsi,gambar) VALUES ('$var_jdl','$var_des','$var_gambar');";
	} 
	 else if(isset($_POST['btn_edit'])){
	$id= $_GET['url'];																						
	if (!empty($get_gambar)){
		move_uploaded_file($get_gambar, "images/" . $var_gambar);
		$query = "UPDATE tb_galeri SET judul='$var_jdl', deskripsi='$var_des', gambar='$var_gambar' WHERE id_galeri ='$id'";
	} else {
		$query = "UPDATE tb_galeri SET judul='$var_jdl', deskripsi='$var_des' WHERE id_galeri ='$id'";
	} 
	}else {
	$id = $_GET['url'];
	$query = "DELETE FROM tb_galeri WHERE id_galeri='$id'";
}
mysqli_query($con, $query);
header("location:index.php");