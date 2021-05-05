<?php 
  //include header file
  include ('include/header.php');
?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>
					<hr class="red-bar">
					
          <!-- Error Messages -->

				<form class="form-group" action="" method="post">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
					</div><!--full name-->
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div><!--End form-group-->
			<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Fe-male<input type="radio" name="gender" id="gender" value="Fe-male" style="margin-left:10px;">
				    </div><!--gender-->
				    	
			<div class="form-group">
              <label for="name">Date of Birth</label><br>
              <input type="date" name="Dob" class="form-control"/>
            </div><!--End form-group-->
				    <div class="form-group">
						<label >Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control">
					</div>
					<div class="form-group"><label>Contact info</label>
						<input type="contact" name="contact" class="form-control"></div>
					<!--End form-group-->
            
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><option value="Indore" >Indore</option>
	<option value="Bhopal" >Bhopal</option>
<option value="Gwalior" >Gwalior</option>
<option value="Dhar" >Dhar</option>
<option value="Ujjain" >Ujjain</option>
<option value="Jabalpur" >Jabalpur</option></select>
            </div><!--city end-->
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern="{6,}">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern="{6,}">
            </div><!--End form-group-->
            <div class="form-inline">
              <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->	
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>
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
if(isset($_POST['submit']))
{	 
	 echo $_POST["name"];
	 echo $_POST["blood_group"];
	 echo $_POST["gender"];
	 echo $_POST["Dob"];
	 echo $_POST["email"];
	 echo $_POST["contact"];
	 echo $_POST["city"];
	 echo $_POST["password"];

	$first_name = $_POST['name'];
	 $blood_gr= $_POST['blood_group'];
	  $gen=$_POST['gender'];
	   $dob= $_POST["Dob"]; 
      $email=$_POST["email"];
	 $cont=$_POST["contact"];
	 $city=$_POST["city"];
	 $pass=$_POST["password"];
	 
	 $sql = "INSERT INTO Blooddoner (Name,Bloodgroup,Gender,Dob,Email,contact,City,Password)
	 VALUES ('$first_name','$blood_gr','$gen','$dob','$email','$cont','$city','$pass')";
	if ($conn->query($sql) === TRUE) {
  echo "<br><br><br><br><br>New record created successfully";
   
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
	 mysqli_close($conn);}

?>