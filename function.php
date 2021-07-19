<?php 
	if (isset($_POST['addnewbarang'])){
		$namabarang = $_POST['namabarang'];
		$deskripsi = $_POST['deskripsi'];
		$stock = $_POST['stock'];

		$addtotable = mysqli_query($conn, "insert into stock (namabarang, deskripsi, stock) values('$namabarang','$deskripsi','$stock')");
		if ($addtotable) {
			header('location:tables.php');
		} else{
			echo 'Gagal';
			header('location:tables.php');
		}
	}
?>