
 
<?php 
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
	span{

		color:green;
	}
</style>
<body>
	
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">This doner's are available </h1>
			<hr class="white-bar">
		</div>
	</div>
</div></body>
<div class="container-fluid">
	<div  class="row">

		<div class="col-md-8 offset-md-3 form-container">
					<h3>
						Doner's Details From 
						<?php $ct="<span>".$_GET['city']."</span>" ;
						      $bg="<span>".$_GET['blood_group']."</span>";
						      echo $ct; echo " and Blood group is  ";echo $bg;?>
							
						</h3>
<?php
$username = "root";
$password = "";
$dbname = "crud";
$servername="";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



 $ct=$_GET['city'] ;
 $bg=$_GET['blood_group'];
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Blooddoner WHERE City='$ct' && Bloodgroup='$bg' OR City='$ct' ";
$result = $conn->query($sql);
if ($result->num_rows >0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	echo "<div ><div style='font-weight: bold;font-size: 18px;text-align: center;padding: 15px 0; border:solid;'>
<p class='text-center'>";

    echo "" . $row["Name"]."<br>";
    echo "" .$row['Bloodgroup']."<br>";
    echo "" .$row["Gender"]."<br>";
    echo "" .$row["Dob"]. "<br>";
    echo "" . $row["Email"]."<br>";
    echo "" .$row["contact"]. "<br>";
    echo "" .$row["Gender"]. "<br>";
    echo "".$row["City"]. "<br>";
echo "</p></div></div> ";
  }
} else {
  echo "0 results";
}
$conn->close();
?>


								
					</div></div>
				</body></form>
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>
