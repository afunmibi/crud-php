<?php
require "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
table, div{
    margin: auto;
    display: flex;
    justify-content: center;
    /* background-color: blue; */
}
        </style>
</head>
<body>
    
<div>
    <h1>Enrollees Details</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th>ACTIONS</th>
        </tr>

        <?php 
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result)>0){
// while($row=mysqli_fetch_assoc($result)){
                // $id =$row['id'];
                // $name =$row['name']; 
                // $phone =$row['phone']; 
                // $email = $row['email']; 

            foreach ($result as $value) {
                $id = $value['id']; 
                $name = $value['name']; 
                $phone = $value['phone']; 
                $email = $value['email']; 
                // echo $name; 
// echo '<tr>
// <td>'.$id.' </td>
// <td>'.$name.' </td>
// <td>'.$phone.' </td>
// <td>'.$email.' </td>
// <td>
/*<a href="update.php?updateid= <?= $value['id']; ?>"> <button >Edit</button></a>*/

// <button>View</button>
// <button>Delete</button>
//  </td>
// </tr>';
//or 

?>
<tr>
<td><?=$value['id'];?> </td>
<td><?=$value['name'];?></td> 
<td><?=$value['phone'];?></td>
<td><?=$value['email'];?></td>
<td>
<a href="update.php?id=<?=$value['id']; ?>"><button >Edit</button></a>

<a href="view.php?id=<?=$value['id']; ?>"><button >View</button></a>

<a href="code.php"> 
 <button name="delete_details" value="<?=$value['id']?>">
  Delete
</button>
</a>
 </td>
</tr>
<?php
}
  
}; 
?>
    </table>
</div>
</body>
</html>