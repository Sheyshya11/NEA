<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <?php
  include("reusableScripts.php");
  ?>
</head>
<body>
<?php
include("header.php");
include("dbconnect.php");
    if (isset($_POST["branch_id"])) {
        $branch_id = $_POST["branch_id"];
    }

    if ($branch_id) {
        $query = "SELECT * from tbl_customer where Branch_ID='$branch_id'";
        $result = mysqli_query($conn, $query);
        
        echo'


        <h1 style="text-align:center">Customer Table</h1>
        
        
        ';
        
        if (!empty($result)&& $result->num_rows > 0) {
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
              <th scope="col">Mobile_no</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
            </div>
          ';
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["SC_No"]."</td><td>".$row["Customer_id"]."</td><td>".$row["Customer_Name"]."</td><td>".$row["Demand_type"]."</td><td>".$row["Mobile_no"]."</td></tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
    }
                ?>
</body>

</html>