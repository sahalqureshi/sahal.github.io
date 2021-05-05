<?php
include('dataconn.php');
if(isset($_POST['update']))
{
  $id = $_POST['id'];
  $firstname = $_POST['firstName'];
  $lastname = $_POST['lastName'];
  $email = $_POST['Email'];


  foreach($id as $key => $value)
  {
    /*echo "Id = ". $value;
    echo "Firstname = ". $firstname[$key];
    echo "Lastname = ". $lastname[$key];
    echo "email = ". $email[$key];

    echo "<br>";*/

    $sql = "UPDATE MyGuests SET 
    firstname='$firstname[$key]',
    lastname='$lastname[$key]',
    email='$email[$key]'
       
        WHERE id=$value";
        if ($conn->query($sql) === TRUE) 
        {
           echo  $value.",";

   
            } else 
              {
             echo "Error: " . $sql . "<br>" . $conn->error;
}
   }
   mysqli_close($conn);
      }

?>
<?php
include('dataconn.php');
if(isset($_REQUEST['delete']))
{
  $chkk = $_REQUEST['chk'];
  echo $a=implode("-", $chkk);
   /* mysql_query("delete from MyGuests WHERE id in($a)");*/
$sql="DELETE FROM myguests WHERE id='$a'";
  if ($conn->query($sql) === TRUE) {
  echo " This roll no Deleted successfully";

   
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}}
   mysqli_close($conn);

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
</head>
<body>
  <div class="container">
  <h2> All DATA </h2> <form action="firstlook.php">
    <input type="submit" name="save" value="Back">
</form>
<form action='' method='POST'>
<button name="update">Update</button>
<button name="delete">Delete</button>
<table class="table table-hover">
    <thead>
      <tr><th> ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th> <th>
          Del
</th></tr>
    </thead>
    <tbody>
          <?php
          include('dataconn.php');
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
              <td><input type='text' name='Email[".$i."]' value='".$row['email']."'></td><td>
              <input type='checkbox' name='chk[".$i."]' value='".$row['id']."'></td>
              </tr>";
              $i++;
            }
          } else {
            echo "0 results";

          $conn->close();}
          ?>
          </form>
      </tbody>
  </table>
</form></form>
</div>
</body>

</html>