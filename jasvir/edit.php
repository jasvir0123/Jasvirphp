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

<form class="col-md-8 bg1 p-5 rounded" method="post" > 
<br><br>
<input type="text"placeholder="Enter Your First Name" class="form-control mt-2"name="fname" required style="background:transparent;color:white">
<br>
<input type="text"placeholder="Enter Your Last Name" class="form-control mt-2"name="lname" required style="background:transparent;color:white">
<br>
<input type="text"placeholder="Enter Your Email" class="form-control mt-2"name="mail" required style="background:transparent;color:white">
<br>
<input type="text"placeholder="Enter Your Mobile No." class="form-control mt-2"name="mobile" required style="background:transparent;color:white">

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

$sql="INSERT INTO `edit`(`firstname`, `lastname`, `emailid`,`mobileno` ) VALUES ('$fname','$lname','$mail','$mobile')";

$result =mysqli_query($con,$sql);

if($result){

    echo "<script>alert('data successfull')</script>";
    echo "<script> location.href='edit.php'</script>";
}

else{
    echo"error";
}


}

?>


<table class="table table-dark table-hover table-bordered bg2" style="height:">

<tr>

<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>Email</th>
<th>mobile no</th>
<th>Delete</th>
<th>Update</th>
</tr>

<?php
$sql="SELECT * FROM `edit` WHERE 1";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>

<tr>
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['firstname'] ?></td>
<td><?php echo $row['lastname'] ?></td>
<td><?php echo $row['emailid'] ?></td>
<td><?php echo $row['mobileno'] ?></td>
<td><a href="delete2.php?id=<?php echo $row['id']  ?>" class="btn btn-outline-danger">Delete</a></td>
<td><a href="update.php?id=<?php echo $row['id']  ?>" class="btn btn-outline-info">Update</a></td>
</tr>

<?php

}



?>





</table>
</body>
</html>


