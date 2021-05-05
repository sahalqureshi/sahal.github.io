
<?php 
  include ('include/header.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";
$servername="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['SignIn']))
{
	
	$email=$_POST["email_phone"];
	
	$pass=$_POST["password"];
	
    
	$sql = "SELECT blooddonerId FROM Blooddoner WHERE Email= '$email' && Password='$pass'";
	$result = $conn->query($sql);

	$row_cnt = $result->num_rows;


			if ($row_cnt == 0) 
			{
		  		 // 301 Moved Permanently
              header("Location: user_not_exist.php", true, 301);
                exit();
		   	} 
	      	else
	      	{
                  while($row_cnt = $result->fetch_assoc()) 
                     {
                        $name  =   $row_cnt["blooddonerId"];
    
                       $error="";

                     }
                      
	           

                      }	
}
mysqli_close($conn);
?>
<!DOCTYPE html>

	<head>
		<title>Donate The Blood</title>
		<meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Blood Donation Website">
        <meta name="author" content="Exceptional Programmers">

        <link rel="stylesheet" href="css/styles.css">

		<!-- Bootstrap Link CSS Files -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

        <!-- Custom Link CSS Files -->
		<link rel="stylesheet" href="css/custom.css">

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	</head>



<?php 
       
            include 'user_NAV.php';
?>

<style>
	h1,h3{
		display: inline-block;
		padding: 10px;
	}
</style>

			
							<div class="heading text-center">
								<div style="color: red; font-weight: bold;font-size: 18px;text-align: center;padding: 15px 0;">
          <?PHP 

          if($error != ""){
          	echo $error;
          
          }
          ?>
      	</div>
								<h3>Welcome </h3> <h1><?php echo $name;?></h1>
							</div>
							<p class="text-center">Here you can mennage your account update your profile</p>
							<button style="margin-top: 20px;" name="date" id="save_the_life" class="btn btn-lg btn-danger center-aligned ">Save The Life</button>
							<div class="test-success text-center" id="data" style="margin-top: 20px;"><!-- Display Message here--></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
<?php

include 'include/footer.php'; 
?>