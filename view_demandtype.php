<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php
  include("reusableScripts.php");
  ?>
</head>
<body>
<?php
include("header.php");
include("dbconnect.php");

$sql = "SELECT * FROM tbl_demandtype";
$result = $conn->query($sql);



echo'


<h1 style="text-align:center">Demand Type Table</h1>


';

if ($result->num_rows > 0) {
  // output data of each row
  echo '
  <div class="table-responsive col-sm-4 mx-auto">
  <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Demand ID</th>
      <th scope="col">Demand Name</th>
     
    </tr>
    </thead>
    <tbody>
    </tbody>
    </div>
  ';
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Demand_id"]."</td><td>".$row["Demand_name"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

?>
</body>
</html>