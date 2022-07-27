<html>
    <head>
        <title>Branch Entry</title>
    </head>

<body>
    
<?php



include("dbconnect.php");

    $branchname=$_POST['branch_name'];
    $branch_id=$_POST["branch_id"];
    $stat=$_POST["Status"];
    if(!empty($branchname)){
        $query="INSERT into tbl_branch(branch_id,branch_name,Status) Values(
            '$branch_id',
          '$branchname',
          '$stat'
          
          )";
          
    $result=mysqli_query($conn,$query);
    if ($result)
{

    echo"Data inserted successfully";
    // header("Location:view_branch.php");
}
else{
    echo"ERROR: ".$query.":-".mysqli_error($conn);
  
}
    }



mysqli_Close($conn);

?>
</body>
</html>