<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";
$con = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);
    $query = "SELECT * FROM signup_info WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $query);

    if ($result) {
    
        if (mysqli_num_rows($result) == 1) {
          
            header("location: main.php");
            exit();
        } else {
           
            $error = "Invalid username or password";
        }
    } 
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="MKOVU69Z.jpg">
    <title>Login Page</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #4a6558;
        }
        .login-box {
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
        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #dfe6ea;
            text-align: center;
        }
        .login-box .user-box {
            position: relative;
            margin-bottom: 30px;
        }
        .login-box .user-box input {
            width: 90%;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            border: none;
            border-radius: 5px;
            background: #273037;
            border-bottom: 1px solid #fff;
            outline: none;
            transition: border-color 0.3s ease;
        }
        .login-box .user-box label {
            position: absolute;
            top: -20px;
            left: 2px;
            color: #fff;
            font-size: 12px;
            pointer-events: none;
            transition: 0.5s;
        }
        .login-box form {
            display: flex;
            flex-direction: column;
        }
        .login-box form .submit-btn {
            padding: 10px;
            width: 30%;
            color: white;
            background-color: #795953;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-box form .submit-btn:hover {
            background-color: #f9b73f;
            color: #114036;
        }
        .login-box form .register-btn {
            padding: 10px;
            width: 30%;
            margin-right: 30px;
            color: white;
            background-color: #795953;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
            text-align: center;
            align-self: end;
        }
        .login-box form .register-btn:hover {
            background-color: #f9b73f;
            color: #114036;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<link rel="icon" href="logo.jpg">
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="user-box">
                <input type="text" name="username" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <button type="submit" class="submit-btn">Login</button>
            <a href="signup.php" class="register-btn">Register</a>
            <div class="error"><?php if(isset($error)) { echo $error; } ?></div>
        </form>
    </div>
</body>
</html>
