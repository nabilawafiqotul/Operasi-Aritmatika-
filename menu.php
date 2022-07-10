<?php  
$pilihan=$_POST['pilih'];
switch($pilihan) {
	case '1':
		header('location:jajargenjang.html');
		break;
	case '2':
		header('location:persegipanjang.html');
		break;
	case '3':
		header('location:bilanganbsrkcl.html');
		break;
	case '4':
		header('location:nilaiujian.php');
		break;
	default:
		echo "Pilihan yang Anda Masukkan salah, Silahkan Coba Lagi!!";
		break;
}
?>