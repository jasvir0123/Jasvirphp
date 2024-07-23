<?php







$servername="localhost";
$username="root";
$password="";
$database="firstdatabase";

$con= mysqli_connect($servername,$username,$password,$database);

if($con){

    // echo"Connected Successfully";
}

else{

    echo"Error";
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
<form class="col-md-8 p-5 bg-dark rounded" method="post">    

<input type="text" placeholder="Enter Your Firstname" class="form-control  mt-2 " name="fname">

<input type="text"placeholder="Enter Your Lastname" class="form-control mt-2" name="lname">

<input type="mail"placeholder="Enter Your Email" class="form-control mt-2" name="mail">

<input type="text"placeholder="Enter Your Number"class="form-control mt-2" name="number">

<input type="password"placeholder="Enter Your Password"class="form-control mt-2" name="password">

<button class="btn btn-success mt-4 col-md-6" name="btn">Submit</button>

</form>
</center>

<?php


if(isset($_POST['btn'])){
    $fname=$_POST['fname'];

    $lname=$_POST['lname'];

    $mail=$_POST['mail'];

    $number=$_POST['number'];

    $password=$_POST['password'];

    $sql="INSERT INTO `form`( `firstname`, `lastname`, `emailid`, `mobileno`, `password`) VALUES ('$fname','$lname','$mail','$number','$password')";

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



