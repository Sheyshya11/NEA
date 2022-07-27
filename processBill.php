<html>
    <head>
        <title>bill Entry</title>
    </head>

<body>
    
<?php
$bill_id=$_POST["Bill_id"];
$SC_NO=$_POST["SC_no"];
$Reading=$_POST["Date_of_reading"];
$current_read=$_POST["curr_reading"];
$previous_month=$_POST["Prev_Month"];
$month=$_POST["bill_month"];
$year=$_POST["bill_year"];
$amount=$_POST["bill_amount"];


$stat=$_POST["Status"];


include("dbconnect.php");
$query="INSERT into tbl_customerbill(Bill_id,Sc_no,Date_of_reading,curr_reading,Prev_Month,bill_month,bill_year,bill_amount,Status) Values(
'$bill_id',
'$SC_NO',
'$Reading',
'$current_read',
'$previous_month',
'$month',
'$year',
'$amount',
'$stat'

)";

$result=mysqli_query($conn,$query);
if ($result)
{

    //echo"Data inserted successfully";
    header("Location:view_bills.php");
}
else{
    echo"ERROR: ".$query.":-".mysqli_error($conn);
  
}
mysqli_Close($conn);

?>
</body>
</html>