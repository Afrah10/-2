<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "af";
// Create connection

$conn = new mysqli($servername, $username, $password,$dbname );

// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

echo "";

 $sql = "INSERT INTO Backwards (`ID`, `Backwards`) VALUES (NULL, 'B')";

if ($conn->query($sql) === TRUE) {

  echo "";

} else {

  echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
<style>
body{
background-image: url("paper.gif");
 
}
h1{

font-size:5em;
color:firebrick;
}
</style>
</head>
<body>
<center>
<h1>B</h1>
</center>
</body>
</html>

<?