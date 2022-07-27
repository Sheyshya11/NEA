<html>

<head>
  <title>Search Results</title>
  <?php
  include("reusableScripts.php");
  ?>
</head>

<body>
  <?php
  include("header.php");
  include("dbconnect.php");

  if (isset($_POST["Customer_ID"])) {
    $cid = $_POST["Customer_ID"];
  }


  if (isset($_POST["Customer_name"])) {
    $cname = $_POST["Customer_name"];
  }

  if (!(($cid) && ($cname))) {
    if ($cid) {
      $query = "SELECT * from tbl_customer where Customer_id= '$cid'";
      $result = mysqli_query($conn, $query);
    } else if ($cname) {
      $query1 = "SELECT * from tbl_customer where Customer_Name='$cname'";
      $result = mysqli_query($conn, $query1);
    }


    echo '
   <h1 style="text-align:center">Customer Table</h1>

        ';

    if (!empty($result) && $result->num_rows > 0) {
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
              <th scope="col">Branch_ID</th>
              <th scope="col">Mobile_no</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
            </div>
          ';
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["SC_No"] . "</td><td>" . $row["Customer_id"] . "</td><td>" . $row["Customer_Name"] . "</td><td>" . $row["Demand_type"] . "</td><td>" . $row["Branch_ID"] . "</td><td>" . $row["Mobile_no"] . "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
  } else {
    header("Location:error.php");

    return;
  }


  mysqli_Close($conn);

  ?>
</body>

</html>