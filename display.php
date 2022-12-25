<?php
require_once "./connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="./addemployee.php" class="text-light">Add Employee</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">salary</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql="select * from `crud`";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $address=$row['address'];
        $salary=$row['salary'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$address.'</td>
        <td>'.$salary.'</td>
        <td><button class="btn btn-primary"><a href="./update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="./delete.php?deleteid='.$id.' " class="text-light">Delete</a></button>
       </td>
      </tr>';
    }
  }
  
?>

  </tbody>
</table>
    </div>
</body>
</html>