<!DOCTYPE html>
<html lang="en">
<head>
  <title>new insertion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script><style>
h1 {
  background-color: grey;
}

div {
  background-color: lightblue;

  

}
</style>
</head>
<body>

<div class="container">

 <h2>Insert new data</h2>

	<form method="post" action="insertdata.php" class="needs-validation" enctype="multipart/form-data" novalidate>
		First name:<br>                 
		
		<input type="text" class="form-control"  placeholder="Enter username" name="first_name" required>
		Last name:<br>
		<input type="text" class="form-control" name="last_name" placeholder="last_name" required>
		<br>
		Email Id:<br>
		<input type="email" class="form-control" name="email"  placeholder="email@emai.com" required>
		<br>
<input type="file" name="upimg" value="put"/>
    <br>
    <br><br>
		<input type="submit" name="save" value="submit">
	</form>
	<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>

  </body>
</html>
<!DOCTYPE html>
<html>
  <body>
	<br><br><form method="post" action="firstlook.php">
		
		<input type="submit" name="save" value="Home">

	</form>
  </body>
</html>