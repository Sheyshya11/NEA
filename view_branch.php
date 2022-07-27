
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Branch</title>
  <?php
  include("reusableScripts.php");
  ?>
</head>
<body>
<?php
include("header.php");
include("dbconnect.php");

$sql = "SELECT * FROM tbl_branch";
$result = $conn->query($sql);


echo'


<h1 style="text-align:center">Branch Table</h1>


';

if ($result->num_rows > 0) {
  // output data of each row
  echo '
  <div class="table-responsive col-sm-6 mx-auto">
  <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Branch_ID</th>
      <th scope="col">Branch_Name</th>
      <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
    </div>
  ';
 
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["branch_id"]."</td><td>".$row["branch_name"]."</td><td>".$row["Status"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

?>
</body>
</html>