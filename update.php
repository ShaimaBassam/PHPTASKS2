<?php
require_once './connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$address=$row['address'];
$salary=$row['salary'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $address=$_POST['address'];
  $salary=$_POST['salary'];
  $sql="update `crud` set id=$id,name='$name',address='$address',salary='$salary' where id=$id";

  $result=mysqli_query($con,$sql);
  if($result){
    header('location:./display.php');
  }else{ 
    die(mysqli_error($con));
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form method="post">
  <div class="form-group my-5">
    <label>Name:</label>
    <input type="text" class="form-control"  placeholder="Enter Name" name="name" autocomplete="off" value=<?php echo $name;?>>
  </div>
  <div class="form-group">
    <label>Address:</label>
    <input type="text" class="form-control"  placeholder="Enter Address" Name="address" autocomplete="off" value=<?php echo $address;?>>
  </div>
  <div class="form-group">
    <label>Salary:</label>
    <input type="text" class="form-control"  placeholder="Enter Salary" Name="salary" autocomplete="off" value=<?php echo $salary;?>>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

</body>
</html>