<?php


$servername="localhost";
$username="root";
$password="";
$database="firstdatabase";


$con=mysqli_connect($servername,$username,$password,$database);

if($con){
echo "Data connect";
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
<form class="col-md-8 bg-dark p-5 rounded" method="post" enctype="multipart/form-data">   

<input type="text"placeholder="Enter Your Name" class="form-control mt-2"name="name" required>
<input type="file"class="form-control mt-2"name="image" required>


<button class="col-md-2 btn btn-info mt-4 h65" name="btn">  
Submit <span class="spinner-grow spinner-grow-sm"></span></button>
</form>

<center>
</body>
</html>


<?php

if(isset($_POST['btn'])){

$name=$_POST['name'];

$image=$_FILES['image']['name'];

$id=$_GET['id'];

$sql="INSERT INTO `image` (`name`, `image`) VALUES ('$name','$image')";

$result=mysqli_query($con,$sql);
if($result)
{
    echo"<script>alert('submit Data Successfull')</script>";
    echo"<script>location.href('image.php')</script>";
}


else{
    echo"<script>alert(' Data Unsuccessfull')</script>";
}


        $target= "img/";
        $file = $target . basename($_FILES['image']['name']);

        $move = move_uploaded_file($_FILES['image']['tmp_name'],$file);


}


?>


<table class="table table-dark table-hover table-bordered table-striped">
<tr>
<th>id</th>
<th>Name</th>
<th>Image</th>
<th>Delete</th>
<th>Update</th>
</tr>

<?php  
            $sql = "SELECT * FROM `image` WHERE 1";

            $result = mysqli_query($con,$sql);

            while($row= mysqli_fetch_array($result)){
?>

                <tr>
                    <td><?php echo $row['id']  ?></td>
                    <td><?php echo $row['name']  ?></td>
                    <td><img src="img/<?php echo $row['image']  ?>" alt="" style="height:150px;width:150px"></td>
                  <td><a href="deleteimage.php?id=<?php echo $row['id']?>" class="btn btn-danger mt-5">Delete</td>
                  <td><a href="updateimage.php?id=<?php echo $row['id']?>" class="btn btn-success mt-5">Update</td>


                </tr>


<?php
            }

?>


</table>




