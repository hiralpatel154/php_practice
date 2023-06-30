<?php
if(isset($_POST['submit'])){
    
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    $get_country = $_POST['country'];
    $get_state = $_POST['state_list'];
    $city_name =$_POST['city_name'];

    $select = "SELECT * FROM city WHERE city_name = '" . $city_name . "'";
    $select_res = mysqli_query($conn, $select);
    $count = mysqli_num_rows($select_res);

    if ($count > 0) {
           
            $_SESSION["err"] = "City Already Exists";
            header('Location: ./index.php?view=read_city');
            die();
        }
        else{
            
            $_SESSION["msg"] = "Added City Suceesfully";
            $sql = "INSERT into city(city_name, state_id, con_id ) values ('".$city_name."','".$get_state."','".$get_country."')" ;
            $result = mysqli_query($conn, $sql);
            if($result == TRUE){
                header("Location:./index.php?view=read_city");
            }
        }

    
}


?>