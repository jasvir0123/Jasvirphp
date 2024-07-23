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

</head>
<body>
<center>


<?php

$id=$_GET['id'];

$sql="SELECT * FROM `image` WHERE `id` = '$id'";
$result=mysqli_query($con,$sql);

$row=mysqli_fetch_array($result);

?>

<form class="col-md-8 bg-dark p-5 rounded" method="post" enctype="multipart/form-data">   

<input type="text"placeholder="Enter Your Name" class="form-control mt-2" name="name" required value="<?php  echo $row['name'] ?>">
<input type="file"class="form-control mt-2"name="image" required>


<button class="col-md-2 btn btn-info mt-4 h65" name="btn">  
Submit <span class="spinner-grow spinner-grow-sm"></span></button>
</form>
</center>

<?php

if(isset($_POST['btn'])){
$fname=$_POST['name'];
$image=$_FILES['image']['name'];

$sql="UPDATE `image` SET `name`='$fname',`image`='$image' WHERE `id`='$id'";
$result =mysqli_query($con,$sql);

if($result){

    echo "<script>alert('data update successfull')</script>";
    echo "<script> location.href='image.php'</script>";
}

else{
    echo"error";
}


$target= "img/";
$file = $target . basename($_FILES['image']['name']);

$move = move_uploaded_file($_FILES['image']['tmp_name'],$file);


}





?>




</body>
</html>
