<?php  
require_once 'connect.php';
//process of adding the data
if (isset($_POST['submit'])) {
	$fname = $conn->real_escape_string($_POST['fname']);
	$lname = $conn->real_escape_string($_POST['lname']);
    
    if(!empty($fname) && !empty($lname)){

            $sql = "INSERT INTO names (firstname, lastname) 
                    VALUES ('$fname', '$lname')";

            if ($add = $conn->query($sql)) {
                header('Location: home.php');
            } else {
                echo "failed to add someone into the list";
            }
    } 
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://app-1489925475.000webhostapp.com/icons/css/materialdesignicons.min.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <center>
    <div>
    <form id="addbody" action="add.php" method="POST">
        <p id="here"></p>
	    <div class="input-field inline">
        <input type="text" name="fname" id="firstname" autocomplete="off"> 
        <label id="label1" for="firstname" data-error="wrong" data-success="right">Firstname</label>
        </div><br>
        <div class="input-field inline">
        <input type="text" name="lname" id="lastname" autocomplete="off">
        <label id="label2" for="lastname" data-error="wrong" data-success="right">Lastname</label>
        </div><br>
    	<input type="submit" id="submit" name="submit" value="Register" class="btn wave-effect waves-light blue">        
	</form>
    </div>
    </center>

<div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large blue">
        <i class="mdi mdi-checkbox-multiple-blank-outline large"></i>
    </a>
    <ul>
      <li class="waves-effect waves-light btn indigo"><a href="add.php"><i class="mdi mdi-account-plus"></i> Add Another Person</a></li>
      <li class="waves-effect waves-light btn green"><a href="home.php"><i class="mdi mdi-format-list-numbers"></i> View list</a></li>
      <li class="waves-effect waves-light btn red"><a href="#"><i class="mdi mdi-information-outline"></i> About me</a></li>
      <li class="waves-effect waves-light btn blue"><a href="index.php"><i class="mdi mdi-home-variant"></i> home</a></li>
    </ul>
</div>    

<script src="js/jquery.js"></script>
<script src="js/materialize.min.js"></script>
<script src="addvalidation.js"></script>
</body>
</html>