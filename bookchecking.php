<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Booking</title>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <h1>Horizon</h1>
  <nav class="nav">
    <ul class="nav__menu">
      <li class="nav__menu-item">
        <a href="main.php">Home</a>
      </li>
      <li class="nav__menu-item">
        <a href="aboutus.html">About</a>
      </li>
      <li class="nav__menu-item">
        <a href="destination.php">Destinations</a>
      </li>
      <li class="nav__menu-item">
        <a href="contact">Contact</a>
      </li>
    </ul>
  </nav>
  <img src="bus.jpg" alt="Bus Image" class="bus-image">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h2>Manage your Booking</h2>
        <form method="POST" action="bookchecking.php">

          <label for="bookingID">Enter your Booking ID</label>
          <input type="text" id="bookingID" name="bookingID" placeholder="Your ID">
          <button type="submit" name="submit">Check Booking Status</button>
        </form>
      </div>
    </div>
  </div>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";
$con = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve booking ID from the form
    $id = $_POST['bookingID'];
    // Query to fetch booking details based on the provided ID
    $query = "SELECT * FROM destination WHERE id='$id'";
    $result = mysqli_query($con, $query);
    // Check if the query was successful
    if ($result) {
        // Check if exactly one row is returned
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            // Fetch the row
            $row = mysqli_fetch_assoc($result);
            // Display the booking details in a table format
            echo "<table border='1'>";
            // Display column names in the first row
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<th>$key</th>";
            }
            echo "</tr>";
            // Display values in the second row
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
            echo "</table>";
        } else {
            // No rows found for the given ID
            echo "<p>Error: No booking found with ID $id</p>";
        }
    } 
}
?>
  <style>
      :root {
    --background: #fff; 
    --nav-background: #141318;
    --hover-green: #003e39;
  }
  
  body {
    margin: 0;
    padding: 0;
    box-sizing: none;
    font-family: Poppins, sans-serif;
    display: flex;
    flex-direction: column;
    width: 100%;
  }
  h2 {
            font-size: 40px;
        }
        button {
            background-color: #4CAF50; 
            color: white; 
            padding: 5px 10px; 
            border: none; 
            cursor: pointer;
        }
        button:hover{
         background-color:  #203321; 
        }
  nav {
    position: fixed;
    top: 0;
    right: 0;
    width: 100%;
    background: #141318;
  }
  .nav__menu {
    max-width: 120px;
    margin-left: 600px;
    padding: 0 1rem 0 0.5rem;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    height: 2.2rem;
  }
  .nav__menu-item a {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 0 1rem;
    color: white;
    font-weight: bold;
    letter-spacing: 0.1rem;
    text-decoration: none;
  }
  .bus-image {
    display: block;
    margin: -30px;
    max-width: 100%;
    width: 100%;
    height: auto;
    padding: 0;
  }
 
.nav__menu-item {
    position: relative;
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  
  .nav__submenu {
    position: absolute;
    left: 0;
    top: 100%;
    background-color: var(--nav-background);
    display: none;
  }
  
  .nav__menu-item:hover {
    background-color: #003e39;
    transition: background-color 0.3s ease;
  }
  
  .nav__submenu-item {
    padding: 0.5rem 1rem;
  }
  
  .nav__submenu-item a {
    color: white;
    text-decoration: none;
  }
</style>
          <footer>
    <p class="text-center mt-3">© 2024 Horizon. All rights reserved.</p>
  </footer>
</body>
</html>
