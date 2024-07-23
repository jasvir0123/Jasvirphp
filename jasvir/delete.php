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


<?php

        $id = $_GET['id'];

        $sql="DELETE FROM `table1` WHERE `id` = '$id'";

        $result = mysqli_query($con,$sql);

        

if($result){

    echo "<script>alert('data Delete successfull')</script>";
    echo "<script> location.href='table1.php'</script>";
}

else{
    echo"error";
}




?>