<?php

include'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud oparation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="index.php" class="text-light">Add Learner</a>
        </button>
        <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">email Address</th>
      <th scope="col">contacts</th>
      <th scope="col">oparation</th>
    </tr>
  </thead>
  <tbody>

  <?php

    $sql="Select * from `crud`";
    $result=mysqli_query($con,$sql);
    
    if($result){
        // $row=mysqli_fetch_assoc($result);
        // echo $row['name'];
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $surname=$row['surname'];
            $email=$row['email'];
            $contacts=$row['contacts'];
            echo ' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$surname.'</td>
            <td>'.$email.'</td>
            <td>'.$contacts.'</td>
            <td>
            <button class="btn btn-success"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'"  class="text-light">Delete</a></button>
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