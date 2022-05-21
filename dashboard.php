<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function logout() {

            window.location.replace("login.php");
        }
    </script>
</head>

<body>
<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "mydb";

$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Error Occured" . mysqli_connect_error());
} else {
    echo "Here are the list of emails" . "<br>" . "<br>";
}

$sql = "SELECT email FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Email: " . $row["email"] . "<br>" . "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?> 
    <br><br>
    <input type="submit" onclick="logout()" value="Logout">


</body>

</html>