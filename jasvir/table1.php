<?php

$servername="localhost";
$username="root";
$password="";
$database="firstdatabase";


$con=mysqli_connect($servername,$username,$password,$database);

if($con){
    echo " Hey Data Submited";
}

else{
    echo "Error";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
.bg1{background-image=}

    </style>
</head>
<body>
<center>
<form class="col-md-8 p-5 bg-warning rounded" method="post">    

<input type="text"placeholder="Enter Your Firstname " class="form-control mt-2" name="fname" required>

<input type="text"placeholder="Enter Your Lastname"class="form-control mt-2" name="lname" required>

<input type="mail"placeholder="Enter Your Email"class="form-control mt-2" name="mail" required>

<input type="number"placeholder="Enter Your Number" class="form-control mt-2" name="number" required>

<input type="password"placeholder="Enter Your Password" class="form-control mt-2" name="password" required>

<input type="date"placeholder="Enter Your Date Of Birth"class="form-control mt-2" name="dob" required>

<button class="btn btn-dark col-md-2 mt-4 fs-4" name="btn">Submit
<span class="spinner-grow spinner-grow-sm"></span>
</button>


</form>
</center>



<?php

if(isset($_POST['btn'])){

$fname=$_POST['fname'];

$lname=$_POST['lname'];

$mail=$_POST['mail'];

$number=$_POST['number'];

$password=$_POST['password'];

$dob=$_POST['dob'];

$sql="INSERT INTO `table1`(`firstname`, `lastname`, `email`, `mobileno`, `password`,`birthdate` ) VALUES ('$fname','$lname','$mail','$number','$password','$dob')";

$result=mysqli_query($con,$sql);



if($result){

    echo "<script>alert('data successfull')</script>";
    echo "<script> location.href='table1.php'</script>";
}

else{
    echo"error";
}




}



?>



<table class="table table-dark table-hover table-bordered">
<tr>
<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>mobile no</th>
<th>password</th>
<th>date of birth </th>
<th>Delete </th>
<th>Update </th>
</tr>

<?php
$sql="SELECT * FROM `table1` WHERE 1";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){


?>



<tr>
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['firstname'] ?></td>
<td><?php echo $row['lastname']  ?></td>
<td><?php echo $row['email']  ?></td>
<td><?php echo $row['mobileno'] ?></td>
<td><?php echo $row['password'] ?></td>
<td><?php echo $row['birthdate'] ?></td>
<td><a href="delete.php?id=<?php echo $row['id']  ?>" class="btn btn-outline-danger">Delete</a></td>
<td><a href="edit.php?id=<?php echo $row['id']  ?>" class="btn btn-outline-success">Edit</a></td>

</tr>

<?php



}

?>

</table>













</body>
</html>







