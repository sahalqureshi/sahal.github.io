<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Data</title>
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

p {
  background-color: green;
  

}
</style>
</head><div class="container">
<body><table class="table table-hover">
    <thead>
      <tr><th> ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th><th></th></tr>
    </thead>

    <tbody>
    


  <h2> All DATA</h2><br>
  <h6>Click on name for details</h6>
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

$sql = "SELECT id, firstname, lastname ,email,image FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<td> " . $row["id"]."</td>";
    echo "<td><a href='detail.php?firstname=$row[firstname]&&id=$row[id]&&image=$row[image]'>" .$row['firstname']." </a></td>";
    echo "<td> " .$row["lastname"]. "</td>";
    echo "<td> " . $row["email"]."</td></tr>";
    

  }
} else {
  echo "0 results";
}
$conn->close();
?>
</tr></tbody></body></div>
<form method="post" action="firstlook.php">
    <input type="submit" name="save" value="Back">

</html>
