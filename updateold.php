<?php

if(isset($_POST['update']))
{
  $id = $_POST['id'];
  $firstname = $_POST['firstName'];
  $lastname = $_POST['lastName'];

  foreach($id as $key => $value){
    echo "Id = ". $value;
    echo "Firstname = ". $firstname[$key];
    echo "Lastname = ". $lastname[$key];

    echo "<br>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <h2> All DATA</h2>
<form action='' method='POST'>
<button name="update">Update</button>
<table class="table table-hover">
    <thead>
      <tr><th> ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th><th>Edit</th><th>Delete</th><th>Select</th> </tr>
    </thead>
    <tbody>
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
          $sql = "SELECT id, firstname, lastname ,email FROM MyGuests";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            $i = 0;
            while($row = $result->fetch_assoc()) {

              echo "<tr>

              <td>".$row['id']."<input type='hidden' name='id[".$i."]' value='".$row['id']."'></td>
              <td><input type='text' name='firstName[".$i."]' value='".$row['firstname']."'></td>
              <td><input type='text' name='lastName[".$i."]' value='".$row['lastname']."'></td>
              <td>".$row['email']."</td>
              <td><a href='editruf.php?id=$row[id]&fn=$row[firstname]&ln=$row[lastname]&em=$row[email]'>EDIT</a></td>
              <td><a href='delete.php?id=$row[id]&fn=$row[firstname]&ln=$row[lastname]&em=$row[email]'>DELETE</a></td><td><input type='checkbox' ></td>
              </tr>";
              $i++;
            }
          } else {
            echo "0 results";

          $conn->close();}
          ?>
      </tbody>
  </table>
</form>
</div>
</body>
<form method="post" action="firstlook.php">
    <input type="submit" name="save" value="Back">
</form>
</html>