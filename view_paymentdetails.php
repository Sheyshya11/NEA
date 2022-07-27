<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment detail</title>
  <?php
  include("reusableScripts.php");
  ?>

</head>
<body>
<?php
include("header.php");
include("dbconnect.php");



if (isset($_GET["id"])){
  $id=$_GET["id"];
  }
  else
  {
    echo"error";
  }

$sql="SELECT *,Customer_Name from tbl_customer_payment as p,tbl_customer as c where p.bill_id='$id'&& p.Sc_no=c.SC_No";
$result=$conn->query($sql);



echo'


<h1 style="text-align:center">Payment Details Table</h1>


';

if ($result->num_rows > 0) {
  // output data of each row
  echo '
  <div class="table-responsive">
  <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col" >payment_id</th>
      <th scope="col">Customer_Name</th>
      <th scope="col">bill_id</th>
      <th scope="col">bill_amt</th>
      <th scope="col">rebate</th>
      <th scope="col">penalty</th>
      <th scope="col">payment_method_id</th>
      <th scope="col">payment_amount</th>
      <th scope="col">payment_date</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
    </div>
  ';
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["payment_id"]."</td><td>".$row["Customer_Name"]."</td><td>".$row["bill_id"]."</td><td>".$row["bill_amt"]."</td><td>".$row["rebate"]."</td><td>".$row["penalty"]."</td><td>".$row["payment_method_id"]."</td><td>".$row["payment_amount"]."</td><td>".$row["payment_date"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

?>
</body>
</html>