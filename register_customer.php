<html>

<head>
    <title>
        Customer data entry form
    </title> <?php
                include("reusableScripts.php");
                ?>
</head>

<body>
    <?php
    include("header.php");
    include("dbconnect.php");
    ?>

    <h2 class="text-center">

        Customer Data Entry Form
    </h2>
    <form class="p-4 border-2 border border-grey rounded col-sm-4 mx-auto" action="processcustomer.php" name="customer" method="POST">
        <div class="form-row">
            <div class="col-md-8 mb-3">
                <label for="">Enter Sc_No:
                </label>
                <input class="form-control" type="text" name="SC_No" placeholder="SC-No" />
            </div>
            <div class="col-md-8 mb-3">
                <label for="">Enter Customer ID:
                </label>
                <input class="form-control" type="text" name="Customer_id" placeholder="Cust-id" />
            </div>
            <div class="col-md-8 mb-3">
                <label for="">Enter Customer Name:
                </label>
                <input class="form-control" type="text" name="Customer_Name" placeholder="fname" />
            </div>
            <div class="col-md-8 mb-3">
                <label for="">Enter Demand Type
                </label>

                <select class="form-control" name="Demand_type" id="">


                    <?php

                    $query1 = "SELECT * from tbl_demandtype";
                    $result1 = mysqli_query($conn, $query1);
                    if ($result1->num_rows > 0) {

                        while ($row = $result1->fetch_assoc()) {
                            $selectdemandname = $row['Demand_name'];
                    ?>

                            <option value="<?php echo $selectdemandname; ?>" selected><?php echo $selectdemandname; ?></option>
                            <?php continue; ?>
                            <option value="<?php echo $selectdemandname; ?>" selected><?php echo $selectdemandname; ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-8 mb-3">
                <label for="">Enter Branch_Name:
                </label>
                <select class="form-control" name="Branch_ID" id="">
                    <?php

                    $query = "SELECT * from tbl_branch";
                    $result = mysqli_query($conn, $query);
                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {
                            $selectdemandname = $row['branch_name'];
                            $selectdemandid = $row["branch_id"];
                    ?>
                            <option value="<?php echo $selectdemandid; ?>" selected><?php echo $selectdemandname; ?></option>
                            <?php continue; ?>
                            <option value="<?php echo $selectdemandid; ?>" selected><?php echo $selectdemandname; ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-8 mb-3">
                <label for="">Enter Mobile No:
                </label>
                <input class="form-control" type="text" name="Mobile_no" placeholder="Mobile" />
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Register</button>

    </form>
</body>


</html>