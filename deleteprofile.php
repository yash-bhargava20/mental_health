<?php  
session_start();
include("dbconnect.php");
?>
<?php  
$un=$_POST['f1'];
$pd=$_POST['f2'];
// echo $un;
// echo $pd;
$sql="delete from abes where username='$un' and password='$pd'";
if(mysqli_query($conn,$sql))
{
    echo  $_SESSION['suser']." your profile is deleted";
    echo "<p style='text-align:center;font-size:50px;font-weight:bold;'>Your Profile is deleted succesfully</p><br><div style=' border: 1px solid red;
    text-align: center;
    background-color: rgb(157, 0, 255);
    margin: 10% 35%;
    border-radius: 30px;
    padding: 20px;
    font-size: 40px;
    color: white;
    font-weight: bold;'><a href='login.php' style=' color: white;
    text-decoration: none;'>Go To Dashboard</a><div> ";
}
else
{
    echo "profile not deleted";
}
?>