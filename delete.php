<?php
include 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM `users` where id=$id";
    $result = mysqli_query($connect, $sql);
            if($result){
                header("location:index.php");
            }else{
                die(mysqli_error($connect));
            }
}
?>