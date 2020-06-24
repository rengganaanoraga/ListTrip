<?php 
	include 'db_connect.php';

	@$idUser = $_GET['id'];

	@$delete = mysqli_query($connect_db, "DELETE FROM `user` WHERE id_user = ".$idUser);
	if ($delete) {
		echo "<script > alert('delete succes'); window.location = 'manage-user.php'</script>";
	}else{
		echo "<script > alert('delete failed'); window.location = 'manage-user.php'</script>";
	}
?>