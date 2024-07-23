<?php

$servername="localhost";
$username="root";
$password="";
$database="firstdatabase";



$con=mysqli_connect($servername,$username,$password,$database);

if($con){
    echo "Hey Your Data Submited";
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

</head>
<body>
<center>
<form class="col-md-8 p-5 bg-warning">

<input type="text" placeholder="Enter Name" class="form-control mt-2" name="fname">

<input type="text" placeholder="Enter Lastname" class="form-control mt-2" name="lname">

<input type="number" placeholder="Enter Number" class="form-control mt-2" name="number">

<input type="mail"placeholder="Enter Your Mail" class="form-control mt-2" name="mail">

<input type="password"placeholder="Enter Password" class="form-control mt-2" name="password">

<button class="btn btn-dark col-md-3">Submit
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

$sql="INSERT INTO `table1`(`firstname`, `lastname`, `email`, `mobileno`, `password` ) VALUES ('$fname','$lname','$mail','$number','$password')";

$result=mysqli_query($con,$sql);


if($result){
    echo"data submit successfull";
}

else{
    echo"error";
}




}









?>










</body>
</html>