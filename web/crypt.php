<?php
$password2=$_GET['password'];
$login=$_GET['login'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tunisiamalldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT salt FROM fos_user where username='administrateur'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $salt=$row['salt'];
    }
} else {
    echo "0 results";
}



$salted = $password2.'{'.$salt.'}';
$digest = hash('sha512', $salted, true);

for ($i=1; $i<5000; $i++) {
    $digest = hash('sha512', $digest.$salted, true);
}

$encodedPassword = base64_encode($digest);

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql2= "Select * from fos_user where username='$login' and password='$encodedPassword'";
$result2 = $conn->query($sql2);

if ($result2->num_rows >0) 
{
   echo "ok";
}


?>