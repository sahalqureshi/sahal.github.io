

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
<style><style>
h1 {
  background-color: grey;
}

div {
  background-color: lightblue;
}

p {
  background-color: green;
  

}
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>
</head><title>Detail</title>
<body><div class="container"><h6>Details of <?php echo $_GET['firstname'];?></h6>
<div class="card mb-3" style="max-width: 5540px;">
  
    <div class="col-md-4">
      <img src="<?php echo $_GET['image'];?>" class="card-img" height="200">
    </div></div>
    
      <div class="card-body">
        <h5 class="card-title"><?php echo $_GET['firstname']; ?></h5>
        <table>
  <tr><th>Roll No</th>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Email</th>
  </tr>
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
$sql = "SELECT id, firstname, lastname ,email FROM MyGuests WHERE id=$_GET[id]";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<td> " . $row["id"]."</td>";
    echo "<td>" .$row['firstname']." </a></td>";
    echo "<td> " .$row["lastname"]. "</td>";
    echo "<td> " . $row["email"]."</td></tr>";
    

  }
} else {
  echo "0 results";
}
$conn->close();
?></body></div></div></div></body></html>

   <table>
<div>
<form method="post" action="select.php">
    <input type="submit" name="save" value="Back"></div>

</form></div></table>
       
      </html>