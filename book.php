<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "book-db";
$connection = mysqli_connect($serverName, $username, $password, $dbname);
if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL!";
  exit();
}
echo "Connection is successfully established";
if(isset($_POST['insert_info'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $location_from = $_POST['from'];
  $location_to = $_POST['to'];
  $departure_day = $_POST['departure-date'];
  $return_day = $_POST['return-date'];
  $trip_type = $_POST['trip-type'];
  $request = "INSERT INTO book_form (Id, Name, Email, Phone, Address, Location_from, Location_to, Departure_Day, Return_Day, Trip_type) 
              VALUES ('$id', '$name', '$email', '$phone', '$address', '$location_from', '$location_to', '$departure_day', '$return_day', '$trip_type')";
  $result_query=mysqli_query($connection, $request);
  if($result_query)
   {
    echo "<script>alert('information is inserted ');</script>";
    exit();
  } else {
  
    echo 'Error: ' . mysqli_error($connection);
  }
} else {
  echo 'There is an error buddy';
}
?>
