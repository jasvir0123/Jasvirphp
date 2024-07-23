<?php

$servername="localhost";
$username="root";
$password="";
$database="firstdatabase";



$con=mysqli_connect($servername,$username,$password,$database);

if($con){
echo "Data Submit Successful";
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
    .bg{background-color:maroon}
    .h65{height:45px}
    .bg1{background-image:url('3.gif');background-size:cover;background-position:center}

    </style>
</head>
<body>
<center>

<?php

$id= $_GET['id'];

$sql="SELECT * FROM `edit` WHERE `id` = '$id'";
$result=mysqli_query($con,$sql);

$row=mysqli_fetch_array($result);

?>

<form class="col-md-8 bg1 p-5 rounded" method="post" > 
<br><br>
<input type="text"placeholder="Enter Your First Name" class="form-control mt-2"name="fname" required style="background:transparent;color:white" value="<?php echo $row['firstname'] ?>">
<br>
<input type="text"placeholder="Enter Your Last Name" class="form-control mt-2"name="lname" required style="background:transparent;color:white" value="<?php echo $row['lastname'] ?>">
<br>
<input type="text"placeholder="Enter Your Email" class="form-control mt-2"name="mail" required style="background:transparent;color:white" value="<?php echo $row['emailid'] ?>">
<br>
<input type="text"placeholder="Enter Your Mobile No." class="form-control mt-2"name="mobile" required style="background:transparent;color:white" value="<?php echo $row['mobileno'] ?>">

<button class="col-md-2 btn btn-dark mt-4 h65" name="btn">  
Submit <span class="spinner-grow spinner-grow-sm"></span></button>

</form>
</center>

<?php

if(isset($_POST['btn'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mail=$_POST['mail'];
$mobile=$_POST['mobile'];
$id= $_GET['id'];

$sql="UPDATE `edit` SET `firstname`='$fname',`lastname`='$lname',`emailid`='$mail',`mobileno`='$mobile' WHERE `id` = '$id'";

$result =mysqli_query($con,$sql);

if($result){

    echo "<script>alert('data update successfull')</script>";
    echo "<script> location.href='edit.php'</script>";
}

else{
    echo"error";
}


}

?>






</body>
</html>


