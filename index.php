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
            <form class="row g-3 my-5 px-5 py-5 bg-light rounded-3" action="login.php" method="POST">
                <div class="col-12 font-monospace fs-1 text-center">LOGIN</div>
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="abc@gmail.com" />
                </div>

                <div class="col-12">
                    <label for="pwd" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pwd" placeholder="**********" />
                </div>



                <div class="row d-flex ">

                    <div class="col-6  mt-4 text-center">
                        <button type="submit" class="btn btn-primary px-5">Sign In</button>
                    </div>
                    <div class="col-6  mt-4 text-center">
                        <a href="register.php" name="registration" class="btn btn-primary px-5">New User</a>
                    </div>
                </div>
                <div>
                    <a href="update.php">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>
    <h1><?php
        echo 1;
        var_dump($usercheck_run); ?></h1>
</body>

</html>