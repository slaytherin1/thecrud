<?php 
require_once 'connect.php';

    //grabs and shows the data
    $id = $_GET['id'];
    if ($getData = $conn->query("SELECT * FROM names WHERE id=$id")) {
        $row = $getData->fetch_object();
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="icons/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="row">
    <div class="col s12 m5 l8 offset-l2 offset-m4">
    <form id="updatebody" action="edit.php" method="POST">
        ID:<input type="text" name="id" value="<?php echo $row->id; ?>" readonly="readonly">
        FIRSTNAME: <input type="text" name="fname" value="<?php echo $row->firstname; ?>">
        LASTNAME: <input type="text" name="lname" value="<?php echo $row->lastname; ?>">
        <input type="submit" name="submit" class="btn wave-effect waves-light" value="Update">
    </form>
    </div>
</div>    

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
</body>
</html>
