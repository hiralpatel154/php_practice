<?php
include('../conn.php');
$id=$_GET['id'];
// echo $id;exit;
$query1 = "SELECT * from city where  id = '".$id."'";
$result1 = mysqli_query($conn,$query1);
$count = mysqli_num_rows($result1);
if($count>0){
    $query = "DELETE FROM city WHERE id=$id";
    mysqli_query($conn,$query);
    header("Location:../index.php?view=read_city");
}else{
    $_SESSION["err"] = "Data Not Found";
    header("Location:../index.php?view=read_city");
}

exit();
?>