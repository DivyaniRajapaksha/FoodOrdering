<?php
require 'header.php';
require 'footer.php';
require 'configLo.php';
//require ("session.php");

 //if($type != "admin")
// {
    // header("Location:home.php");
 //}

?>
<?php 
if(!$conn)
{
    echo "Fail to connect to MYSQL!".mysqli_connect_error();
}
else
{
    $sql = "SELECT* FROM user WHERE type ='customer'";
    $result = mysqli_query($conn,$sql);
}
?>



    <meta name="viewport" content="width=device-width, initial-scale=1">
         
         <!-- <link rel="stylesheet" type ="text/css" href="css/navi.css">   -->
 <style>


.active {
    background-color: #4CAF50;
}
#cus,#table{
        text-align:center;
    }
    #tab{
        text-align:center;  
    }
    table{
        float:center;
    }



<style>
body{background-image: url("images/backa.jpg");}
table tr,td,th,table{color:white; border:1px white solid;}
</style>
<br><br><br><br>
<div class="menu1">
<a href="chefDetails.php">Chefs' Details</a>    
<a href="CusDetails.php">Customers' Details</a>
<a href="managerDetails.php">Managers' Details</a> 
<a href="deliveryPerDetail.php">Delivery Persons' Details</a> 
</div>
<br><br><br><br>
<?php require 'addmenu.php';?>
        </head>
		
    <body><br><br><br>
	<div style = "position:absolute; top:600px; left:310px;"border='1'>
	
   <!-- --------- Details Table ---------------------------------- -->
     <h2 style ="color:white;"id="cus">Customers' Details</h2>
        <div id="tab" >
            <table id="table" border='1'>
            <thead>
            <tr>
                <th>Id </th>
                <th>Frist Name</th>
                <th>Last Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>No</th>
                <th>Street</th>
                <th>City</th>
                <th>Post Code</th>
                <th>Type</th>
</tr>
</thead>
<tbody>

 

<?php
while($row = $result->fetch_assoc())
{ ?>

    <tr>
    <td> <?php echo $row['Id']?> </td>
    
    <td> <?php echo $row['first_name'] ?> </td>
    <td> <?php echo $row['last_name'] ?> </td>
    <td> <?php echo $row['password'] ?> </td>
    <td> <?php echo $row['email'] ?> </td>
    <td> <?php echo $row['contact_no'] ?> </td>
    <td> <?php echo $row['add_1'] ?> </td>
    <td> <?php echo $row['add_2'] ?> </td>
    <td> <?php echo $row['city'] ?> </td>
    <td> <?php echo $row['post_code'] ?> </td>
    <td> <?php echo $row['type'] ?> </td>
    <td> <a href="EditTable.php?id=<?php echo $row['Id']; ?>"> edit </a></td>
    
    <td> <a href="DeleteTable.php?id=<?php echo $row['Id']; ?>"> Delete </a></td>
    </tr>
   
<?php 

}
mysqli_close($conn); 
?>

</tbody>
</table>
</div><br><br><br>


</body>



</html>

