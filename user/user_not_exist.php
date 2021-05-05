
<?php 
  include ('include/header.php');

?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Alert Boxe</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
	.bs-example{
    	margin: 20px;
    }

	h1,h3{
		display: inline-block;
		padding: 10px;
	}
	a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
</style></head><body>

			<div class="container" style="padding: 60px 0;">
			<div class="row">
				<div class="col-md-12 col-md-push-1">
					<div class="panel panel-default" style="padding: 20px;">
						<div class="panel-body">
							
								<div class="alert alert-danger alert-dismissable" style="font-size: 18px; display: none;">
    						
    								<strong>Warning!</strong> Are you sure you want a save the life if you press yes, then you will not be able to show before 3 months.
    							
    							<div class="buttons" style="padding: 20px 10px;">
    								<input type="text" value="" hidden="true" name="today">
    								<button class="btn btn-primary" id="yes" name="yes" type="submit">Yes</button>
    								<button class="btn btn-info" id="no" name="no">No</button>
    							</div>
  							</div>
							<div class="heading text-center">
								<div style="color: red; font-weight: bold;font-size: 18px;text-align: center;padding: 15px 0;">
          
      	</div>
								 <h1>Please register and then login</h1>
							</div>
							     <div class="bs-example"> 
                                  <div class="alert alert-warning alert-dismissible fade show">
                                           <strong>Warning!</strong> Please enter a valid Values before proceeding.
                                         <button type="button" class="close" data-dismiss="alert">&times;</button>
                                   </div>
                                   </div><div class="center-aligned">
							 
							<button  style="margin-top: 20px;" name="" id="" class="btn btn-lg btn-danger center-aligned ">
								<a href="http://localhost/sahal/signup.php" style="color: yellow">SignUP</a></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</body>
		
<?php

include 'include/footer.php'; 
?>