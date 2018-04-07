<?php
require_once 'connect.php';
//gets all the data in the library if there is a record
$records = array();

if ($result = $conn->query("SELECT * FROM names")) {
	if ($result->num_rows) {
		while ($row = $result->fetch_object()) {
			$records[] = $row;
		}
		$result->free();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>List of names</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://app-1489925475.000webhostapp.com/icons/css/materialdesignicons.min.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <style> .row { margin-top: 30px; } </style>
</head>
<body>
    
<div class="row">
    
    <div class="col s12 m8 l8 offset-l2 white">
    <br>
    <a href="add.php" id="empty" class="btn wave-effect waves-light indigo">ADD</a>
    <a href="deleteall.php" class="btn wave-effect waves-light red">EMPTY LIST</a>
    <br>
	<?php
	if (!count($records)) {
		echo "<center><h5>No records</h5></center><br>";
	} else {
	?>

			<table class="bordered highlight responsive-table">
				<tr>
					<th>ID</th>
					<th>Firstname</th>
					<th>Lastname</th>
				</tr>

				<?php
				foreach ($records as $r) {
				?>
				
				<tr>
					<td><?php echo $r->id; ?></td>
					<td><?php echo $r->firstname; ?></td>
					<td id="padtd"><?php echo $r->lastname;?></td>
					<td>
                    <?php echo '<a id="update" href="update.php?id='.$r->id.'" class="waves-effect btn green">'; ?>UPDATE
                    <?php echo '<a id="delete" class="waves-effect waves-light btn red" href="#modal1">DELETE</a>';?>
				</tr>

				<?php 
				}
				?>

			</table>
	<?php
	}
	?>

    </div>
</div>        

<!--Modal-->    
  
  <div id="modal1" class="modal">
    <div class="modal-content">
      <p>Are you sure? you are now deleting this person from the list</p>
    </div>
    <div class="modal-footer">
      <?php echo '<a href="delete.php?id=' .$r->id. '" class="waves-effect waves-green btn-flat">Yes</a>'; ?>
      <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">No</a>        
    </div>
  </div>    
    
  <div id="modal2" class="modal">
    <div class="row modal-content">
        <div class="col s7 m5 l3">
        <img class="responsive-img circle" src="1.png">
        </div>
        <div class="col s8 m8 l9">
        <h4>Hi I'm Richard<i class="mdi mdi-emoticon-excited"></i></h4>
        <p>Just another noob who recently knew how to make my codes run.</p>
        </div>
    </div>
  </div>
    
    
    
<!--FAB toolbar-->
<div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large blue">
        <i class="mdi mdi-checkbox-multiple-blank-outline large"></i>
    </a>
    <ul>
      <li class="waves-effect waves-light btn indigo"><a href="add.php"><i class="mdi mdi-account-plus"></i> Add Another Person</a></li>
      <li class="waves-effect waves-light btn green"><a href="index.php"><i class="mdi mdi-format-list-numbers"></i> View list</a></li>
      <li class="waves-effect waves-light btn red"><a href="#modal2"><i class="mdi mdi-information-outline"></i> About me</a></li>
      <li class="waves-effect waves-light btn blue"><a href="index.php"><i class="mdi mdi-home-variant"></i> home</a></li>
    </ul>
</div>    
<script src="js/jquery.js"></script>
<script src="js/materialize.min.js"></script>
    
<script>
    $(document).ready(function(){
    $('#modal1').modal();
    $('#modal2').modal();
    });
    
</script>
</body>
</html>