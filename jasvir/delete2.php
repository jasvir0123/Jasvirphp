<?php

$servername="localhost";
$username="root";
$password="";
$database="firstdatabase";


$con=mysqli_connect($servername,$username,$password,$database);

if($con){
echo "Hey your Data Submited";

}

else{

    echo "Something Error";
}

?>


<?php


$id =$_GET['id'];
$sql="DELETE FROM `edit` WHERE `id` = '$id'";
$result = mysqli_query($con,$sql);

if($result){

    echo "<script>alert('data Delete successfull')</script>";
    echo "<script> location.href='edit.php'</script>";
}

else{
    echo"error";
}



?>