<?php

$servername="localhost";
$username="root";
$password="";
$database="firstdatabase";


$con=mysqli_connect($servername,$username,$password,$database);

// if($con){

// echo "<script> alert('Your Data Has Been Submited')</script>";
// }

// else{
//     echo "<script> alert('Your Data Has Been Not Submited')</script>";
// }

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
        .bg1{background-image:url('1.jpg');background-size:cover;background-position:center}
        .h65{height:45px}

        ::placeholder{
            color: white;
            font-size:18px;
        }

</style>
</head>
<body>
<center>

<form class="col-md-8 p-5 bg1 mt-5 rounded " method="post">


<input type="text"placeholder="Enter First Name" class="col-md-12 mt-3 h65 " name="fname"required style="background:transparent;outline:none;padding-left:20px;color:white"id="click1"  onfocus="myFunction1()">

<input type="text"placeholder="Enter Last Name" class="col-md-12 mt-3 h65" name="lname"required style="background:transparent;outline:none;padding-left:20px;color:white" id="click2"  onfocus="myFunction2()">

<input type="number"placeholder="Enter Mobile-No" class="col-md-12 mt-3 h65" name="mobile"required style="background:transparent;outline:none;padding-left:20px;color:white" id="click3"  onfocus="myFunction3()">

<input type="text"placeholder="Enter Password" class=" col-md-12 mt-3 h65" name="password"required style="background:transparent;outline:none;padding-left:20px;color:white;border-color:white;border: 2px solid white" id="click4"  onfocus="myFunction4()">


<button class="col-md-2 btn btn-dark mt-4 h65" name="btn">  
Submit <span class="spinner-grow spinner-grow-sm"></span></button>









</form>
</center>
<script>

function myFunction1(){
            document.getElementById('click1').style.background='#ffff0000';
}

function myFunction2(){
            document.getElementById('click2').style.background='#ffff0000';
}

function myFunction3(){
            document.getElementById('click3').style.background='#ffff0000';
}

function myFunction4(){
            document.getElementById('click4').style.background='#ffff0000';
}
    </script>
</body>
</html>






