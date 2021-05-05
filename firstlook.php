<!DOCTYPE html>
<html lang="en">
<head>
  <title>First page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
h1 {
  background-color: grey;
}

div {
  background-color: lightblue;
}

p {
  background-color: green;
  

}
</style>
</head>
<body>
  
<br>

<div class="container" >
  <h1 class="text-center">WELCOME ADMIN</h1>
  <br>
  <!-- Nav pills -->
  
    <ul >
    <li ><form action="insertform.php">
      <input class="btn btn-secondary" type="submit" name="" value="New Entry" ></form></li>
      <br>
      <li >
        <form action="select.php">
      <input class="btn btn-success"type="submit" name="" value="Search" ></form>

    </li>
    <br>
    <li >
      <form action="update.php">
      <input class="btn btn-danger"type="submit" name="" value="UPDATE" ></form></li><br></ul></div>
<div class="container" >
  <h1 class="text-center">Update Data with Ajax</h1>
<br>
   <ul> <li >
     <nav class="">
  <form class="form-inline" action="update.php">
    <button class="btn btn-outline-success" type="submit">Update</button></form><br><li>
    <form class="form-inline" action="ajaxdel.php">
    <button class="btn btn-outline-success" type="submit">Delete</button></form>
  
</nav>


</div>

    </body></html>
