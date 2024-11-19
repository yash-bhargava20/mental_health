<?php 
$un=$_POST['t1'];
$em=$_POST['t2'];
$ft=$_POST['t3'];
$c=$_POST['t4'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
 {
    die("Connection failed: " . mysqli_connect_error());
  }
  
$sql = "INSERT INTO feedback
  VALUES ('$un','$em','$ft','$c')";
  
  if (mysqli_query($conn, $sql))
   {
    echo "<p style='text-align:center;font-size:50px;font-weight:bold;'>Your Feedback is Succesfully Submitted</p><br><div style=' border: 1px solid red;
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