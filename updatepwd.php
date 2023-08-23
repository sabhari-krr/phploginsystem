<?php
include("config.php");
if (isset($_POST['users'])) {

    $email = $_POST['email'];
    $newpwd = $_POST['pwd'];

    $usercheckquery = "SELECT email FROM users WHERE email='$email'";
    $usercheck_run = mysqli_query($db, $usercheckquery);
    $count = mysqli_num_rows($usercheck_run);
    if ($usercheck_run !== NULL) {

        $query = "UPDATE users SET pwd='$newpwd' WHERE email='$email'";
        $query_run = mysqli_query($db, $query);
        echo "<script>alert('Password Changed successfully');
		window.location.href='index.php';
		</script>";
    } else {
        echo "<script>alert('No valid email');
                  window.location.href='update.php';
                  </script>";
    }
}
