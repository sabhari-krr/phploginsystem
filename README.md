---
# PHP Login and Registration System:

This repository contains a simple PHP-based login and registration system with password recovery functionality. It uses a MySQL database to store user information. The system consists of the following components:

1. `config.php`: This file contains the database connection settings using the `mysqli` extension.

```php
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'crud');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
```

2. `index.php`: The main login page that allows users to log in.

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head section content -->
</head>
<body>
    <!-- Login form content -->
</body>
</html>
```

3. `login.php`: Handles the user login process and redirects accordingly.

```php
<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Login logic
}
?>
```

4. `register.php`: Provides a registration form for new users.

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head section content -->
</head>
<body>
    <!-- Registration form content -->
</body>
</html>
```

5. `insert.php`: Handles user registration and inserts new user data into the database.

```php
<?php
include "config.php";
if (isset($_POST['users'])) {
    // Registration logic
}
?>
```

6. `update.php`: Allows users to update their password after logging in.

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head section content -->
</head>
<body>
    <!-- Update password form content -->
</body>
</html>
```

7. `updatepwd.php`: Handles the password update process.

```php
<?php
include("config.php");
if (isset($_POST['users'])) {
    // Update password logic
}
?>
```

## How to Use

1. Set up a MySQL database and configure `config.php` with your database details.
2. Host the PHP files on a server with PHP and MySQL support.
3. Access `index.php` to log in or `register.php` to create a new account.
4. Use `update.php` to update your password and `updatepwd.php` for the update process.

Remember to ensure proper security measures, such as input validation and password hashing, before deploying this system in a production environment.

## Database Structure

The system uses a MySQL database named crud. It includes a table named users with the following structure:

id: Primary key (auto-increment)
Other columns: (These would be based on your implementation)
Please ensure proper security measures, such as input validation and password hashing, before deploying this system in a production environment.

---------------------------------
---

## New Feature: Delete User

We've added a new feature to the PHP login and registration system that allows administrators to delete user accounts. This feature is useful for managing user accounts in scenarios where account removal is required.

### How It Works

1. **Backend Logic:**

   The new feature is implemented in the `deluser.php` file. When an administrator submits the delete user form, the provided email and password are checked against the database. If a match is found, the user account associated with the provided email is deleted from the database.

   ```php
   <?php
   include ("config.php");
   if($_SERVER['REQUEST_METHOD']=='POST')
   {
       $myusername = mysqli_real_escape_string($db, $_POST['email']);
       $mypassword = mysqli_real_escape_string($db, $_POST['pwd']);

       // Check if user exists and password matches
       $sql = "SELECT * FROM users WHERE email = '$myusername' and pwd = '$mypassword'";
       $count = mysqli_num_rows(mysqli_query($db, $sql));

       if ($count == 1) {
            // Delete the user account
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
   ```

2. **Frontend Form:**

   The user interface for this feature is provided through the `deluser.php` file. Administrators need to enter the email and password of the user they want to delete. Upon submission, the form data is sent to the server for processing.

   ```html
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <!-- Head section content -->
   </head>
   <body>
       <!-- Delete user form content -->
   </body>
   </html>
   ```

### How to Use

1. Open the `deluser.php` page from your browser.
2. Enter the email and password of the user you want to delete.
3. Click the "Delete user" button.
4. If the provided email and password match an existing user account, the account will be deleted and a confirmation message will be shown.
5. If the provided information is incorrect, an error message will be displayed.

Please ensure that only authorized administrators have access to this feature to prevent misuse.

---
