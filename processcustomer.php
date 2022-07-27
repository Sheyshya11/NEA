<html>
    <head>
        <title>Customer ENtry</title>
    </head>

<body>
    
<?php
$SC_No=$_POST["SC_No"];
$Customer_id=$_POST["Customer_id"];
$Customer_Name=$_POST["Customer_Name"];
$Demand_type=$_POST["Demand_type"];
$Branch_ID=$_POST["Branch_ID"];
$Mobile_no=$_POST["Mobile_no"];
$duplicate = false;
include("dbconnect.php");



if ( $SC_No!=''&&$Customer_id!=''&&$Customer_Name!=''&&$Demand_type!=''&&$Branch_ID!=''&&$Mobile_no!=''&&$duplicate==false){
    try {
        $sql = "SELECT COUNT(*) as count FROM tbl_customer WHERE SC_No = '$SC_No'";
        $res = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($res);
        if ($data['count'] > 0) {
            echo '<center>CUSTOMER ALREADY IN USE</center>';
            $duplicate = true;
        }
    } catch (Exception $e) {
        
    
    }
    try {
        $sql = "SELECT COUNT(*) as count FROM tbl_customer WHERE Customer_id = '$Customer_id'";
        $res = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($res);
        if ($data['count'] > 0) {
            echo '<center>CUSTOMER ALREADY IN USE</center>';
            $duplicate = true;
        }
    } catch (Exception $e) {
       
    
    }
    

try{
$query="INSERT into tbl_customer(SC_No, Customer_id, Customer_Name, Demand_type, Branch_ID, Mobile_no) Values(
'$SC_No',
'$Customer_id',
'$Customer_Name',
'$Demand_type',
'$Branch_ID',
'$Mobile_no'

)";

$result=mysqli_query($conn,$query);

if ($result)
{

    //echo"Data inserted successfully";
    header("Location:displayCustomer.php");
}


}
catch (Exception $e){ }


}
else
{
   echo"Enter required fields!!!!";
   
}
?>
</body>
</html>