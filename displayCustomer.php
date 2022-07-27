<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customers</title>
  <?php
  include("reusableScripts.php");
  ?>
</head>
<body>
<?php
include("header.php");
include("dbconnect.php");

$sql = "SELECT *,branch_name FROM tbl_customer c,tbl_branch b where c.Branch_ID=b.Branch_ID ORDER BY c.Sc_No";
$result = $conn->query($sql);

echo'


<h1 style="text-align:center">Customer Table</h1>


';

if ($result->num_rows > 0) {
  // output data of each row
  echo '
  <div class="table-responsive">
  <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col" >Sc_No</th>
      <th scope="col">Customer_id</th>
      <th scope="col">Customer_fullname</th>
      <th scope="col">Demand_type(A)</th>
      <th scope="col">Branch_Name</th>
      <th scope="col">Mobile_no</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
    </div>
  ';
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["SC_No"]."</td><td>".$row["Customer_id"]."</td><td>".$row["Customer_Name"]."</td><td>".$row["Demand_type"]."</td><td>".$row["branch_name"]."</td><td>".$row["Mobile_no"]."</td>";
    ?><td><a href="view_bills.php?id=<?php echo $row["Customer_id"];?>&&sc=<?php echo $row["SC_No"];?>">View Bill</a>
</td><?php echo "</tr>";  

}
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

?>