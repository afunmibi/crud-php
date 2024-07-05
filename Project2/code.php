<?php 
require "functions.php";

 if(isset($_POST['delete_details'])){
    $details_id = $_POST['delete_details']; 
$sql = "delete from users where id = 'delete_details' "; 
$result = mysqli_query($con, $sql);
if($result){
    // echo "record deleted";
    header('Location: display.php');
}else{ 
    echo 'not deleted'.mysqli_connect_error($con); 
}

}

//insert data into the database
if (isset($_POST['submit'])) {
	$name = htmlspecialchars($_POST['name']); 
	$phone = htmlspecialchars($_POST['phone']); 
	$email = htmlspecialchars($_POST['email']); 
	echo $name.'<br>'; 
    echo $phone.'<br>'; 
    echo $email.'<br>'; 

    $sql = "insert into users (name, phone,email) values('$name', '$phone','$email')";
    $result = mysqli_query($con,$sql);

    if($result){
        // echo'data submitted';
        header('Location: index.php'); 
    }else{
        echo'data not saved'.mysqli_connect_error($con);
    }
}
?>


