<?php
require 'header.php';
require 'footer.php';
require 'configLo.php';
//require ("session.php");

?>
<?php 
if(!$conn)
{
    echo "Fail to connect to MYSQL!".mysqli_connect_error();
}
else
{
    $sql = "SELECT* FROM user WHERE type='delivery person'";
    $result = mysqli_query($conn,$sql);
    
{
?>

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

    <h2 style ="color:white;"align="center">Delivery persons' Details</h2>
        <table border='1'>
            <thead>
            <tr>
                <th>Id </th>
                <th>Frist Name</th>
                <th>Last Name</th>
                <th>Password</th>
                <!-- <th>Confirm Password</th> -->
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
    <td> <?php echo $row['Id'] ?> </td>
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
    <td> <a href="EditTable.php?id=<?php echo $row['Id']; ?>"> Edit </a></td>
    <td> <a href="DeleteTable.php?id=<?php echo $row['Id']; ?>"> Delete </a></td>
</tr>
<?php 
}
}
}

mysqli_close($conn); ?>

</tbody>
</table><br><br><br>
</div>

</body>
<script>
// After login
                //Dropdown------------------------
                
                function myFunction() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }
                window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {

                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                    }
                }
                }
                //  End this part 
</script>
</html>
