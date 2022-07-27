<Html>

<head>
    <title>Nepal Electricity Authority</title>
    <?php
    include("reusableScripts.php");
    ?>
<style>
    body{
        margin: 0;
        padding: 0;
       
    }
</style>

</head>

<body>

    <?php
    include("header.php");
    ?>
    
    <div class="list-group m-4 py-3 col-sm-4  ">
        <a href="register_customer.php" class="list-group-item list-group-item-action text-primary ">Register Customers</a>
        <a href="register_branch.php" class="list-group-item list-group-item-action text-primary"> Register Branches</a>
        <a href="register_demandtype.php" class="list-group-item list-group-item-action text-primary">Register Demand Types</a>
        <a href="register_paymentMethod.php" class="list-group-item list-group-item-action text-primary">Register Payment Methods</a>

    </div>
   
    <?php
include("footer.php");
?>
 
 

</body>

</html>