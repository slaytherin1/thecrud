<?php 
require_once 'connect.php';
//edit or update the current data
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$fname = $conn->real_escape_string($_POST['fname']);
	$lname = $conn->real_escape_string($_POST['lname']);

    if(!empty($fname) && !empty($lname) && !empty($id) ){
        $sql = "UPDATE names SET 
                firstname='$fname',
                lastname='$lname'
                WHERE id=$id";
        if ($update = $conn->query($sql)) {
            header('Location: home.php');
            $conn->free();
        } 
    } else {
        echo 'cannot update empty string ';
    }
       
} 

?>