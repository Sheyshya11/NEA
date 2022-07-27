<html>
    <head>
        <title>Customer ENtry</title>
    </head>

<body>
    
<?php
$demandID=$_POST['Demand-id'];
$demand_name=$_POST['Demand_name'];


include("dbconnect.php");
$query="INSERT into tbl_demandtype(Demand_id,Demand_name) Values(
'$demandID',
'$demand_name'

)";

$result=mysqli_query($conn,$query);
if ($result)
{

    //echo"Data inserted successfully";
    header("Location:view_demandtype.php");
}
else{
    echo"ERROR: ".$query.":-".mysqli_error($conn);
  
}
mysqli_Close($conn);

?>
</body>
</html>