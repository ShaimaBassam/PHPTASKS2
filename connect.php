<?php
$con=new mysqli('localhost','root','','crudoperation');
if(!$con){
    echo die(mysqli_error($con));
} 



?>