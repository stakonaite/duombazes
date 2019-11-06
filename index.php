<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbntry {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print $sql . "<br>" . $e->getMessage();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_conpassword = $_POST['user_conpassword'];
}

    if (empty($user_name) || empty($user_email) || empty($user_password) || empty($user_conpassword)) {
        print $status = "Inputs are empty!";
    } else {
        if (strlen($user_name) > 255 || !preg_match("/[a-zA-Z-1\s]+$/", $user_name)) {
            print $status = "Enter valid name";
        } elseif (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
           print     $status = "Enter valid email";
        } elseif ($_POST['user_password'] != $_POST['user_conpassword']) {
            print $status = "Passwords do no match";
        } else {
            $sql = "INSERT INTO users (user_name, user_email, user_password) VALUES (:user_name, :user_email, :user_password)";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['user_name' => $user_name, 'user_email' => $user_email, 'user_password' => $user_password]);
            print $status = "Your message was sent";
        }
    }


?>
<!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width = device-width, user-scalable = no, initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content="ie = edge">
        <title>Document</title>
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>
        <div class="d-flex flex-column">
        <form method="post">
        <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" class="form-control" name="user_name">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="user_password">
        </div>
        <div class="form-group">
            <label for="pwd">Confirm Password:</label>
            <input type="password" class="form-control" name="user_conpassword">
        </div>
        <div class="form-group">
            <label for="usr">Email:</label>
            <input type="email" class="form-control" name="user_email">
        </div>
            <button type="submit" class="btn btn-primary">Spausk cia</button>
        </form>
        </div> 
    </body>
</html>