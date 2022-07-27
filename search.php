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
    ?>


    <h1 class="text-center">Search By ID and Name</h1>
    <form   class="p-4 border-2 border border-grey rounded col-sm-4 mx-auto" action="processForm.php" name="searchByIDandName" method="POST">
        <div class="form-row">
            <div class="col-md-8 mb-3">
                <label for="validationDefault01">Customer_name</label>
                <input type="text" class="form-control" id="validationDefault01" placeholder="Customer Name" name="Customer_name">
            </div>
            <div class="col-md-8 mb-3">
                <label for="validationDefault02">Customer_ID:</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="Customer ID" name="Customer_ID">
            </div>

        </div>
        <button class="btn btn-primary" type="submit">Search</button>
    </form>

<br><br>

    <h1 class="text-center">Search By Branch</h1>
    <form class="p-4 border-2 border border-grey rounded col-sm-4 mx-auto" action="processFormbyBranch.php" name="searchByBranch" method="POST">
        <div class="form-row">
            <div class="col-md-8 mb-3">
                <select name="branch_id" id="">
                    

                    <?php

                    $query = "SELECT * from tbl_branch";
                    $result = mysqli_query($conn, $query);
                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {
                            $selectBranchname = $row['branch_name'];
                            $selectBranchid = $row["branch_id"];

                    ?>
                            <option value="<?php echo $selectBranchid; ?>" selected><?php echo $selectBranchname; ?></option>
                            <?php continue; ?>
                            <option value="<?php echo $selectBranchid; ?>" selected><?php echo $selectBranchname; ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Search</button>

    </form>
    <?php
include("footer.php");
?>
 
</body>

</html>