<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['insert_info'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location_from = $_POST['from'];
    $location_to = $_POST['to'];
    $departure_day = $_POST['departure-date'];

    // Check if ID already exists in the database
    $check_query = "SELECT * FROM destination WHERE id='$id'";
    $check_result = mysqli_query($connection, $check_query);
    if ($check_result && mysqli_num_rows($check_result) > 0) {
        echo "<script>alert('This ID is already taken. Please choose a different ID.');</script>";
    } else {
        // Insert data into the database
        if (empty($id) || empty($name) || empty($email) || empty($phone) ||
            empty($location_from) || empty($location_to) || empty($departure_day)) {
            echo "<script>alert('Please fill out the form correctly.');</script>";
        } else {
            // Prepare and execute the SQL statement
            $stmt = $connection->prepare("INSERT INTO destination (id, name, email, Phone, location_from, location_to, departure_day) 
                                        VALUES (?, ?, ?, ?, ?, ?, ?)");
            if ($stmt === false) {
                // Display an error message if the prepare() function fails
                die("Error: " . $connection->error);
            }
            $stmt->bind_param("issssss", $id, $name, $email, $phone, $location_from, $location_to, $departure_day);

            $result_query = $stmt->execute();

            if ($result_query) {
                echo "<script>alert('Information has been inserted successfully.');</script>";
                header("Location: payment.html");
                exit(); // Exit to prevent further execution of the script
            } else {
                // Display a more informative error message if the query fails
                $error_message = "Error: " . mysqli_error($connection);
                echo "<script>alert('$error_message');</script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>destination</title>
  <link rel="stylesheet" href="destination.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <h1>Horizon</h1>
  <nav class="nav">
  <ul class="nav__menu">
    <li class="nav__menu-item"><a href="main.php">Home</a></li>
    <li class="nav__menu-item"><a href="features.html">Bus Features</a></li>
    <li class="nav__menu-item"><a href="bookchecking.php">Manage My Bookings</a></li>
    <li class="nav__menu-item"><a href="aboutus.html">About us</a></li>
    <li class="nav__menu-item"><a href="contact us.html">Contact Us</a></li>
  </ul>
</nav>
  <img src="bus.jpg" alt="Bus Image" class="bus-image">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <form action="" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            
            <div class="form-group">
          <label for="id" class="form-label">ID:</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="Enter ID" style="width: 1100px;">



          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" style="width: 1100px" required="required">
            </div>
          
            <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" style="width: 1100px">
          </div>
          
          <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" style="width: 1100px">
          </div>
</div>
          <div class="mb-3">
  <label for="from" class="form-label">From:</label>
  <div class="input-group">
    <select class="form-select" id="from" name="from">
      <option value="adama">Adama</option>
      <option value="addis_abeba">Addis Ababa</option>
      <option value="dire_dawa">Dire Dawa</option>
      <option value="harar">Harar</option>
      <option value="gondar">Gondar</option>
      <option value="bahir_dar">Bahir Dar</option>
    </select>
  </div>
</div>

<div class="mb-3">
  <label for="to" class="form-label">To:</label>
  <div class="input-group">
    <select class="form-select" id="to" name="to">
      <option value="adama">Adama</option>
      <option value="addis_abeba">Addis Ababa</option>
      <option value="dire_dawa">Dire Dawa</option>
      <option value="harar">Harar</option>
      <option value="gondar">Gondar</option>
      <option value="bahir_dar">Bahir Dar</option>
    </select>
  </div>
</div>
<div class="mb-3">
  <label for="departure-date" class="form-label">Departure Date:</label>
  <input type="date" class="form-control" id="departure-date" name="departure-date" style="width: 1100px">
</div>

          <div>
            <input type="submit" name="insert_info" class="btn btn-primary"></input>
          </div>  
        </form>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-DJtXKxLdD0vrJv0WwzHqf2zgc0jGqLm7WbB7IfcF6pI5jP6BcBxLzrlLz9D+9Uvh" crossorigin="anonymous"></script>
  <footer>
    <p class="text-center mt-3">© 2024 Alpha bus Station. All rights reserved.</p>
  </footer></body>
</html>