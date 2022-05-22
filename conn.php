<?php 

if($_SERVER['REQUEST_METHOD']=='POST'){
  $Name=$_POST['name'];
  $Email=$_POST['email'];
  $Pass=$_POST['pass'];

$server="localhost";
$username="root";
$password="";
$db="mydb";

//connection object

$conn=mysqli_connect($server,$username,$password,$db);

if(!$conn){
  die( "Connection failed".mysqli_connect_error());
}
else{
  echo "Here are the list of Emails";


$sql="INSERT INTO user (name,email,pass) VALUES ('$Name','$Email','$Pass')";
$result=mysqli_query($conn, $sql);

if(!$result){
  echo "query not Created.";
}
else{
  echo"<br><br>";

$sql1 = "SELECT email FROM user";
$result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Email: " . $row['email'] . "<br>" . "<br>";
    }
} else {
    echo "0 results";
}
}
}
}
?>