# PHP Login and Registration System

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

---
