<?php
include ("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $myusername = mysqli_real_escape_string($db, $_POST['email']);
   $mypassword = mysqli_real_escape_string($db, $_POST['pwd']);

   $sql = "SELECT * FROM users WHERE email = '$myusername' and pwd = '$mypassword'";

   $count = mysqli_num_rows(mysqli_query($db, $sql));


   if ($count == 1) {
        $delquery="DELETE FROM users WHERE email='$myusername'";
        $delrun=mysqli_query($db,$delquery);
        if($delrun)
        {

            echo "<script>alert('User Deleted');window.location.href='register.php';</script>";
        }

   } else {
      echo "<script>alert('Your Login Name or Password is invalid');window.location.href='deluser.php';</script>";
      exit();
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
        body {
            background-image: linear-gradient(to right, #8360c3, #2ebf91);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container vh-100">
            <form class="row g-3 my-5 px-5 py-5 bg-light rounded-3" action="deluser.php" method="POST" name="users">
                <div class="col-12 font-monospace fs-1 text-center">DELETE USER</div>
                <div class="col-md-12">
                    <label for="email" class="form-label">Enter email of the user</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="abc@gmail.com" />
                </div>
                <div class="col-md-12">
                    <label for="pwd" class="form-label">Password</label>
                    <input type="pwd" class="form-control" name="pwd" placeholder="************" />
                </div>


                <div class="row d-flex ">

                    <div class="col-6  mt-4 text-center">
                        <button type="submit" name="users" class="btn btn-primary px-5">Delete user</button>
                    </div>
                    <div class="col-6  mt-4 text-center">
                        <a href="index.php" class="btn btn-primary px-5">Nevermind</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>

</html>