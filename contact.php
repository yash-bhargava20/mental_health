<?php 
$a=$_POST['f1'];
$b=$_POST['f2'];
$c=$_POST['f3'];
$d=$_POST['f4'];
$e=$_POST['f5'];
$f=$_POST['f6'];
$g=$_POST['f7'];
$h=$_POST['f8'];
$i=$_POST['f9'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
 {
    die("Connection failed: " . mysqli_connect_error());
  }
  
$sql = "INSERT INTO contact
  VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
  
  if (mysqli_query($conn, $sql))
   {
    echo "<p style='text-align:center;font-size:50px;font-weight:bold;'>Thanks For Contacting Us</p><br><div style=' border: 1px solid red;
    text-align: center;
    background-color: rgb(157, 0, 255);
    margin: 10% 35%;
    border-radius: 30px;
    padding: 20px;
    font-size: 40px;
    color: white;
    font-weight: bold;'><a href='dashboard.php' style=' color: white;
    text-decoration: none;'>Go to Dashboard</a><div> ";
    }
    else
     {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
  


?>