<?php
include 'config.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM `users` where id=$id";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);

        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];

if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

// sql query

$sql = "UPDATE `users` set id=$id, name='$name', email='$email', phone='$phone' where id='$id'";
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
                    <h3>Update User</h3>
                    <a href="index.php"class="btn btn-sm btn-success float-end"style="margin-top:-36px">User list </a>
                    </div>
                    <div class="card-body">
                            <form action="" method="POST">
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" required class="form-control" id="" value=<?php echo $name;?>>
                            
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" required class="form-control" id="" value =<?php echo $email;?>>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Phone</label>
                            <input type="tel" name="phone" required class="form-control" id="" value =<?php echo $phone;?>>
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
        
  </body>
</html>
