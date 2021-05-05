<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

   echo $id=$_POST['id']; 


   $sql="DELETE FROM myguests WHERE id='$id'";
  if ($conn->query($sql) === TRUE) {
  echo "Updated successfully";

   
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
   mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
  <body>
  <form method="post" action="select.php">
    <input type="submit" name="save" value="select">
  </form></body></html>

  