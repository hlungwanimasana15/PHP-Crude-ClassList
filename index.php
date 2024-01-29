
<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $contacts=$_POST['contacts'];

    $sql="insert into `crud`(name,surname,email,contacts)
    values('$name','$surname','$email','$contacts')";

     $result = mysqli_query($con, $sql);;

    if($result){
        // echo"data has been inserted successfully";
        header('location:display.php');
    }else{
        die(mySql_error($con));
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
      <input type="text"  class="form-control" value="Enter your name" name="name">
    </div>
  </div>
  <div class="mb-3 row">
    <label  class="col-sm-2 col-form-label">Surname</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" value="Enter your surname"  name="surname">
    </div>
  </div>
    <div class="mb-3 row">
    <label  class="col-sm-2 col-form-label">Email adress</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" value="email@example.com"  name="email">
    </div>
  </div>
  <div class="mb-3 row">
    <label  class="col-sm-2 col-form-label">Contacts</label>
    <div class="col-sm-10">
      <input type="password" class="form-control"    name="contacts">
    </div>
  </div>
  <button type="submit" class="btn btn-secondary" name='submit'>Add</button>
</form>
    </div>
 
  </body>
</html>
