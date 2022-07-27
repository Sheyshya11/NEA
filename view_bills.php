<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bills</title>
  <?php
  include("reusableScripts.php");
  ?>

</head>

<body>
  <?php
  include("header.php");
  include("dbconnect.php");

  if (isset($_GET["sc"])) {
    $sc = $_GET["sc"];
  } else {
    echo "error";
  }

  $sql = "SELECT * FROM tbl_customerbill where SC_no='$sc'";
  $result = $conn->query($sql);


  if (isset($_GET["id"])) {
    $id = $_GET["id"];
  } else {
    echo "error";
  }

  $sql1 = "SELECT * from tbl_customer where Customer_id='$id'";
  $customer = $conn->query($sql1);



  echo '


<h1 class="m-4">Customer Detail</h1>


';

  if ($customer->num_rows > 0) {
    // output data of each row



    while ($row = $customer->fetch_assoc()) {
      echo '
   
  <div class="list-group col-sm-4 m-4 ">
  <a class="list-group-item ">SC No: ' . $row["SC_No"] . '</a>
  <a class="list-group-item">Customer ID: ' . $row["Customer_id"] . '</a>
  <a class="list-group-item">Customer Name: ' . $row["Customer_Name"] . '</a>
  <a class="list-group-item">Branch ID: ' . $row["Branch_ID"] . '</a>
  <a class="list-group-item">Mobile No: ' . $row["Mobile_no"] . '</a>
</div>

  ';
    }
   
    echo "</table>";
  } else {
    echo "0 results";
  }





  echo '


<h1 style="text-align:center">Bill Table</h1>


';

  if ($result->num_rows > 0) {
    // output data of each row
    echo '
  <div class="table-responsive">
  <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col" >S.N</th>
      <th scope="col">Bill_id</th>
      <th scope="col">Date_of_reading</th>
      <th scope="col">curr_reading</th>
      <th scope="col">Prev_Month</th>
      <th scope="col">bill_month</th>
      <th scope="col">bill_year</th>
      <th scope="col">bill_amount</th>
      <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
    </div>
  ';
    $i = 1;
    while ($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $i . "</td><td>" . $row["Bill_id"] . "</td><td>" . $row["Date_of_reading"] . "</td><td>" . $row["curr_reading"] . "</td><td>" . $row["Prev_Month"] . "</td><td>" . $row["bill_month"] . "</td><td>" . $row["bill_year"] . "</td><td>" . $row["bill_amount"] . "</td><td>" . $row["Status"] . "</td>";
      $i = $i + 1; ?><td>
        <a href="view_paymentdetails.php?id=<?php echo $row['Bill_id']; ?>">View payment</a>
      </td><?php echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();

            ?>
</body>

</html>