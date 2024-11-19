<?php
session_start();
include("dbconnect.php");
?>
<?php
$un=$_POST['f1'];
$pd=$_POST['f2'];
$sql = "SELECT * FROM mental";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    if($row["username"]==$un && $row["password"]==$pd){
        $_SESSION["suser"]= $un;
        header("location:profile.php");
    }else{
        header("location:login.html");
    }
}
mysqli_close($conn);
?>