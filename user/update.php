<?php 
	
	include 'include/header.php';

	//include 'include/sidebar.php';
 
            include 'user_NAV.php';
            
?>
<?php
$username = "root";
$password = "";
$dbname = "crud";
$servername="";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



 $DonID=$_GET['blooddonerId'] ;
 echo $DonID;
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT blooddonerId,Name,Bloodgroup,Gender,Dob,Email,contact,City,Password FROM Blooddoner WHERE blooddonerId='$DonID]/-'";
$result = $conn->query($sql);
if ($result->num_rows >0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	
	$name = $row["Name"];
    $bg=    $row['Bloodgroup'];
    $gen=   $row["Gender"];
    $Dob=   $row["Dob"];
    $eml=   $row["Email"];
    $cnt=   $row["contact"];
    $ct=    $row["City"];
    $psw=   $row["Password"];

  }
} else {
  echo "0 results";
}
$conn->close();
?>

<?php 
// for inserting updayed data*********************************
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";
$servername="";
$error="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit']))
{
	$first_name = $_POST['name'];
	$blood_gr= $_POST['blood_group'];
	$gen=$_POST['gender'];
	$dob= $_POST["Dob"]; 
	$email=$_POST["email"];
	$con=$_POST["cn"];
	$city=$_POST["city"];
	$pass=$_POST["password"];
	$c_password=$_POST["c_password"];

	$error="";
	
	if($pass == $c_password)
	{ 

	$sql = "SELECT * FROM Blooddoner WHERE contact= $con";
	$result = $conn->query($sql);

	$row_cnt = $result->num_rows;


			if ($row_cnt > 1) 
			{
		  			$error = "Contact number already exists!!";
		   	} 
	      	else
	      	{

	           $sql = "SELECT * FROM Blooddoner WHERE Email= '$email'";
	           $result = $conn->query($sql);

	        	$row_cnt = $result->num_rows;
	      		if ($row_cnt > 1) 
	            {
	               
	               $error = "Email already exists!!";
	            } 
	            else 
	          	{
                    $sql = "SELECT blooddonerId FROM Blooddoner WHERE contact= '$con' AND Email='$email'";
					$result = $conn->query($sql);
					$row_cnt = $result->num_rows;
					while($row_cnt = $result->fetch_assoc()) 
                     {
                        $Bid  =   $row_cnt["blooddonerId"];
					 }
                     
					if($Bid==$DonID)
					 {

                            $sql = "UPDATE Blooddoner SET Name='$first_name',Bloodgroup='$blood_gr',Gender='$gen',Dob='$dob',Email='$email',contact='$con',City='$city',Password='$pass'WHERE blooddonerId=$DonID";

		                    if ($conn->query($sql) === TRUE) 
		                    {
		                        $error = "Your ID Updated successfully";
					            }
					   			else
					        	{
							         $error = "Error: " . $sql . "<br>" . $conn->error;
					         	}
					  }
					  else
					  {

					  	$error="Try other Email or Contact no";

					  }       	
					mysqli_close($conn);
				}
			}
		}
		else
		{
			$error = "Password do not match please retype password!!";
		}
   }
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
<body>
	<script>
		function pval()
		{

			var a= document.getElementById("password").value;
			if (a.length < 6)
			{
						document.getElementById("messages").innerHTML="** Password must be 6 character ";
						return false;
             }


		}

	</script>
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
					<h3>Update Details</h3>
					<hr class="red-bar">
					
          <!-- Error Messages -->
          <div style="color: red; font-weight: bold;font-size: 18px;text-align: center;padding: 15px 0;">
          <?PHP 

          if($error != ""){
          	echo $error;
          }
          ?>
      	</div>
				<form class="form-group" action="" method="post" onsubmit="return pval()">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" value="<?php echo  $name;?>" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
					</div><!--full name-->
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value=""><?php echo  $bg; echo "(**Select from list)";?></option>
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
				              		Fe-male<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;">
				    </div><!--gender-->
				    	
			<div class="form-group">
              <label for="name">Date of Birth</label><br>
              <input type="date" value="<?php echo  $Dob;?>" name="Dob"  class="form-control" min="1970-01-01" max="2003-01-01" />
            </div><!--End form-group-->
				    <div class="form-group">
						<label >Email</label>
						<input type="text" name="email" id="email" value="<?php echo  $eml;?>"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control">
					</div>
					<div class="form-group"><label>Contact info</label>
						<input type="contact" value="<?php echo  $cnt;?>" name="cn" class="form-control"></div>
					<!--End form-group-->
            
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
	<option value=""><?php echo  $ct;echo "(**Select from list)";?></option><option value="Indore" >Indore</option>
	<option value="Bhopal" >Bhopal</option>
<option value="Gwalior" >Gwalior</option>
<option value="Dhar" >Dhar</option>
<option value="Ujjain" >Ujjain</option>
<option value="Jabalpur" >Jabalpur</option></select>
            </div><!--city end-->
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" name="password" id="password" value="<?php echo  $psw;?>" placeholder="Password" class="form-control" required pattern="{6,}" maxlength="6">
              <span id="messages" style="color: red;"></span>
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern="{6,}" maxlength="6">
              <span id="Messages"></span>
            </div><!--End form-group-->
            <div class="form-inline">
              <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->	
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</body></form>
		</div>
	</div>
</div>
	
<?php
include 'include/footer.php'; 
 ?>