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
$first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $email = $_POST['email'];
	 $filename= $_FILES["upimg"]["name"];
	 $tname= $_FILES["upimg"]["tmp_name"];
	 $folder= "img/".$filename;
	 move_uploaded_file($tname,$folder);
	 $sql = "INSERT INTO MyGuests (firstname,lastname,email,image)
	 VALUES ('$first_name','$last_name','$email','$folder')";
	if ($conn->query($sql) === TRUE) {
  echo "<br><br><br><br><br>New record created successfully";

   
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
	 mysqli_close($conn);}

?>
<!DOCTYPE html>
<html>
  <body>
	<form method="post" action="insertform.php">
		
		<input type="submit" name="save" value="Insert">
	</form>
  </body>
</html>