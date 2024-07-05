<?php
require 'functions.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Details </title>
</head>

<body>
	<div class='container'>

		<?php
// print_r($_GET['id']);

		if(isset($_GET['id'])){
			// echo $id_details = $_GET['id']; 
			 $id_details = $_GET['id']; 
			$sql = "select * from users where id = '$id_details' ";
			$result = mysqli_query($con, $sql);

			if(mysqli_num_rows($result)>0){
				$person = mysqli_fetch_assoc($result);
				// print_r($person);
				// echo $person['id'];  

				?>
<div style="margin: auto;  
 align-items: center;">
<div>
<h4><label>Name: </label>
 <?=$person['name'];?></h4>
</div>
<div>
<h4><label>Phone: </label>
<?=$person['phone'];?></h4>
</div>
<div>
<h4><label>Email: </label>
<?=$person['email'];?></h4>
</div>

<a href="display.php"><button>Back</button></a>

</div>

				<?php 
				
			}else{
echo "<h4>No such record found</h4>";

			}


			;

		}
		 ?>
		




</body>
</html>