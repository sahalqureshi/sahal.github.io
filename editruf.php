<?php

include("dataconn.php");
echo $_GET['id']; ?>

<!DOCTYPE html>
<html>
  <body>
  <form method="post" action="">
    First name:<br>
    
    <input  name="id" value="<?php echo $_GET['id'];?>" disabled>
    <br>
    First name:<br>

    <input type="text" name="first_name" value="<?php echo $_GET['fn'];?>">
    <br>
    Last name:<br>
    <input type="text" name="last_name" value="<?php echo $_GET['ln'];?>">
    <br>
    Email Id:<br>
    <input type="email" name="email" value="<?php echo $_GET['em'];?>">
    <br><br>
    <input type="submit" name="save" value="Update">
  </form>
  </body>
</html>
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
if(isset($_POST['save']))
{  
   echo $_POST["first_name"];
   echo $id=$_POST['id'];
$first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $sql = "UPDATE MyGuests SET firstname='$first_name',
   lastname='$last_name',
email='$email'
     WHERE id='$id'";
  if ($conn->query($sql) === TRUE) {
  echo "Updated successfully";

   
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
   mysqli_close($conn);}

?><!DOCTYPE html>
<html>
  <body>
  <form method="post" action="select.php">
    <input type="submit" name="save" value="select">
  </form></body></html>