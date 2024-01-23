<?php
$connect = new mysqli('localhost', 'root','', 'iop-1');
if(!$connect){
    die(mysqli_error($connect));
}

?>