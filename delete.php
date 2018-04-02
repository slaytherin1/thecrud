<?php 
require_once 'connect.php';
//process to delete the data
$id = $_GET['id'];
if ($delete = $conn->query("DELETE FROM names WHERE id=$id")) {
	header('Location: home.php');
	$conn->free();
}

?>