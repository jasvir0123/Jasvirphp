
<?php

$servername="localhost";
$username="root";
$password="";
$database="firstdatabase";


$con=mysqli_connect($servername,$username,$password,$database);


if($con){

echo"Data Submited";

}

else{

    echo "Error";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .h66{height:46px}
    </style>
</head>
<body>
    

<center>
<form class="col-md-7 bg-danger p-5 rounded" method="post">

<input type="text"placeholder="Enter Firstname"class="form-control mt-2 h66" name="fname"required>
<input type="text"placeholder="Enter Lastname"class="form-control mt-2 h66" name="lname"required>
<input type="mail"placeholder="Enter Mail-id"class="form-control mt-2 h66" name="mail"required>
<input type="number"placeholder="Enter Mobile-no"class="form-control mt-2 h66" name="mobile"required>
<input type="password"placeholder="Enter Password"class="form-control mt-2 h66" name="password"required>

<button class="col-md-2 btn btn-info mt-4 h65" name="btn">  
Submit </button>

</form>
</center>


<?php
if(isset($_POST['btn'])){
$fname=$_POST['fname'];
$lanme=$_POST['lname'];
$mail=$_POST['mail'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$sql="INSERT INTO `signup`( `firstname`, `lastname`, `emailid`, `mobileno`, `password`) VALUES ('$fname','$lanme','$mail','$mobile','$password')";

$result=mysqli_query($con,$sql);
if($result){

    echo "<script>alert('Data Submited')</script>";
    echo "<script>location.href('signup.php')</script>";
}

else{

    echo "<script>alert('Data not submited')</script>";
}

}







?>






</body>
</html>