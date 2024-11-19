<?php 
$un=$_POST['t1'];
$pd=$_POST['t2'];
$ad=$_POST['t3'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mental";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
 {
    die("Connection failed: " . mysqli_connect_error());
  }
  
$sql = "INSERT INTO mental
  VALUES ('$un','$pd','$ad')";
  
  if (mysqli_query($conn, $sql))
   {
    header("location:login.html");
    }
    else
     {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
  


?>