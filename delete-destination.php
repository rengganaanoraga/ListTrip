<?php 
	include 'db_connect.php';

	@$idDestination = $_GET['id'];

	@$delete = mysqli_query($connect_db, "DELETE FROM `destination` WHERE id = ".$idDestination);
	if ($delete) {
		echo "<script > alert('delete succes'); window.location = 'manage-destination.php'</script>";
	}else{
		echo "<script > alert('delete failed'); window.location = 'manage-destination.php'</script>";
	}
?>