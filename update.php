
<?php

include 'connect.php';
if(isset($_GET['updateid'])){
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$surname=$row['surname'];
$email=$row['email'];
$contacts=$row['contacts'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $contacts=$_POST['contacts'];

    $sql="update `crud` set id=$id,name='$name',surname='$surname',email='$email',contacts='$contacts'
    where id=$id";

     $result = mysqli_query($con, $sql);

    if($result){
        // echo"data has been updated successfully";
         header('location:display.php');
    }else{
        die(mySql_error($con));
    }
} else {
    echo "Invalid or missing 'updateid' parameter in the URL.";
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ClassList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
        <div class="mb-3 row">
    <label  class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" value=<?php echo $name;?> name="name">
    </div>
  </div>
  <div class="mb-3 row">
    <label  class="col-sm-2 col-form-label">Surname</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control"  value=<?php echo $surname;?>  name="surname">
    </div>
  </div>
    <div class="mb-3 row">
    <label  class="col-sm-2 col-form-label">Email adress</label>
    <div class="col-sm-10">
      <input type="email" class="form-control"  value=<?php echo $email;?>  name="email">
    </div>
  </div>
  <div class="mb-3 row">
    <label  class="col-sm-2 col-form-label">Contacts</label>
    <div class="col-sm-10">
      <input type="password" class="form-control"   value=<?php echo $contacts;?>  name="contacts">
    </div>
  </div>
  <button type="submit" class="btn btn-secondary" name='submit'>Update</button>
</form>
    </div>
 
  </body>
</html>
