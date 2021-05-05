<!DOCTYPE html>
<html lang="en">
<head>
  <title>new insertion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
  <style>
h1 {
  background-color: grey;
}

div {
	margin-top: 10px;
  background-color: lightblue;

  

}
</style>
</head>
           <body> <div class="container">
<form action="firstlook.php">
    <input type="submit" name="save" value="Back">
</form>

	<form action='' method='POST'>

<button name="update">Update</button>
<input  type="submit" name="delete" value="Delete" onclick="return confirm('Are u want to delete!')" class="btn btn-danger">
<table class="table">
    <thead>
      <tr><th> ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th> <th><form>
          <input class="checkAll" type="checkbox" id="checkAll" name=""> Delete All
</form></th></tr>
    </thead>
    <tbody>
          <?php
                include('dataconn.php');
                if(isset($_REQUEST['delete']))
{
  $chkk = $_REQUEST['chk'];
  echo $a=implode("-", $chkk);
                foreach ($_REQUEST['chk'] as $chk) 
  {
             $sql="DELETE FROM myguests WHERE id='$chk'";
             if ($conn->query($sql) === TRUE) {
             echo " This roll no Deleted successfully";

   
}
 else 

{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
   mysqli_close($conn);

?>
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
              <input type='checkbox' class='checkItem' name='chk[".$i."]' value='".$row['id']."'> Delete</td>
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




                  </div>
           <script src="jquery.min.js"></script><script src="bootstrap.min.js"></script>
<script >
  $("#checkAll").change(function() {
  $(".checkItem").prop("checked", $(this).prop("checked"));
});

$("input[type=checkbox]").click(function() {
  if (!$(this).prop("checked")) {
    $("#checkAll").prop("checked", false);
  }
});
</script></body>
</html>