<?php 
include('../conn.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

if(isset($_POST['edit'])){
    $id=$_SESSION['id'];
    $username= $_POST['username'];
    $email= $_POST['email'];
    $contact= $_POST['contact'];
    $query = "SELECT * from user where  id = '".$id."'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    $res = $row['id'];
    if($res == $id){
      $update = "update user set username='".$username."',email='".$email."', contact='".$contact."' where id='".$id."'";
      $sql2=mysqli_query($conn,$update);
        if($sql2){
            // echo "hi"; exit;
            header('location:../index.php?view=profile');
        }
        else
       {
           header('location:index.php?view="edit_profile"');
       }
    }
    else
    {
        header('location:index.php?view="edit_profile"');
    }
}
?>