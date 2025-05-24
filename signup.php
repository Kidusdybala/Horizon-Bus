<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";
$con = new mysqli($servername, $username, $password, $dbname);

session_start();

if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        $user_name = mysqli_real_escape_string($con, $user_name);
        $password = mysqli_real_escape_string($con, $password);

        $insert_query = "INSERT INTO signup_info (username, password) VALUES ('$user_name', '$password')";
        $result = mysqli_query($con, $insert_query);

        if ($result) {
            echo "<script>alert('Information is inserted.');</script>";
            
            $query = "SELECT * FROM signup_info WHERE username='$user_name' AND password='$password'";
            $result = mysqli_query($con, $query);

            if ($result) {
                if (mysqli_num_rows($result) == 1) {
                    $_SESSION['username'] = $user_name; // Store username in session for later use
                    header("location: login.php");
                    exit();
                } else {
                    $error = "Invalid username or password";
                }
            }
        } else {
            echo "<script>alert('Information is not inserted.');</script>";
        }
    } else {
        echo "Please fill out the form correctly.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="logo.jpg">
    <title>Register Page</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #4a6558;
        }

        .register-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            padding: 40px;
            background: linear-gradient(#243640, #2b4b40);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(2, 0, 0, 3);
            border-radius: 10px;
        }

        .register-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #dfe6ea;
            text-align: center;
        }

        .register-box .user-box {
            position: relative;
            margin-bottom: 30px;
        }

        .register-box .user-box input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #000;
            border: none;
            border-radius: 5px;
            background: #fff;
            border-bottom: 1px solid #fff;
            transition: border-color 0.3s ease;
        }

        .register-box .user-box label {
            position: absolute;
            top: -20px;
            left: 2px;
            color: #fff;
            font-size: 13px;
        }

        .register-box form .submit-btn {
            padding: 10px;
            width: 30%;
            color: white;
            background-color: #795953;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-align: center;
            text-decoration: none;
            margin: 20px auto;
            display: block;
        }

        .register-box form .submit-btn:hover {
            background-color: #f9b73f;
            color: #114036;
        }
    </style>
</head>
<body>  <link rel="icon" href="logo.jpg">
    <div class="register-box">
        <h2>Register</h2>
        <form method="POST" action="">
            <div class="user-box">
                <input type="text" name="user_name" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <button type="submit" name="submit" class="submit-btn">Submit</button>
            <div style="color: white;">
  <span style="display: inline;">Already have an account?</span>
  <a href="login.php" style="color: white; text-decoration: underline; display: inline;">Click here to login</a>
</div>
        </form>
    </div>
</body>
</html>
