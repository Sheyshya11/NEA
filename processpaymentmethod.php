
<html>
    <head>
        <title>Payment method Entry</title>
    </head>

<body>
    
<?php
$payment_id=$_POST['payment_id'];
$payment_name=$_POST['Payment_Name'];
$stat=$_POST['Status'];

include("dbconnect.php");
$query="INSERT into payment_method(payment_id,Payment_Name,Status) Values(
'$payment_id',
'$payment_name',
'$stat'

)";

$result=mysqli_query($conn,$query);
if ($result)
{

    //echo"Data inserted successfully";
    header("Location:view_payment_method.php");
}
else{
    echo"ERROR: ".$query.":-".mysqli_error($conn);
  
}
mysqli_Close($conn);

?>
</body>
</html>