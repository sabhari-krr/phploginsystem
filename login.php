
<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 

   $myusername = mysqli_real_escape_string($db, $_POST['email']);
   $mypassword = mysqli_real_escape_string($db, $_POST['pwd']);

   $sql = "SELECT * FROM users WHERE email = '$myusername' and pwd = '$mypassword'";

   $count = mysqli_num_rows(mysqli_query($db, $sql));


   if ($count == 1) {

      echo "<script>alert('Login Successful');window.location.href='https://www.google.com';</script>";
   } else {
      echo "<script>alert('Your Login Name or Password is invalid');window.location.href='index.php';</script>";
      exit();
      echo '10';
   }
}


?>
