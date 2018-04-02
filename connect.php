<?php 

$conn = @new mysqli('localhost','root','randr123','crud_db');

if ($conn->connect_errno) {
	die('Sorry, we\'re having some problems');	
}

?> 