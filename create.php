<?php
include 'config.php';

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// sql query

$sql = "INSERT INTO users(name, email,phone)VALUES('$name','$email','$phone')";
$result = mysqli_query($connect, $sql);

if($result){
    header('location:index.php');
}else{
    die(mysqli_error($connect));
}

}


?>







<!doctype html>
<html lang="en">
  <head>
    <meta charset=
    "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
   <div class="col-md-12">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <div class="card">
                <div class="card-header">
                    <h3>Create New User</h3>
                    <a href="index.php"class="btn btn-sm btn-success float-end"style="margin-top:-36px">User list </a>
                    </div>
                    <div class="card-body">
                            <form action="" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label">Name</label>
                            <input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" required class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                            <input type="tel" name="phone" required class="form-control" id="exampleInputPassword1">
                        </div>
                            <button type="submit" name="submit"required class="btn btn-primary">Submit</button>
                        </form> 
                        
                        

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
   </div> 
    </div>
        
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
