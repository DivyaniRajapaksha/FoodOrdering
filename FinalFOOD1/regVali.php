<?php
require 'configLo.php';
require ("session.php");
?>
<?php 
if(!$conn)
{
    echo "Fail to connect to MYSQL!".mysqli_connect_error();
}
else
{
    $sql = "SELECT* FROM user";
    $result = mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <h2>Customers' Details</h2>
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
    <td> <a href="EditAccount.php?id=<?php echo $row['Id']; ?>"> Edit </a></td>
</tr>
<?php 
}

mysqli_close($conn); ?>
</tbody>
</table>
</body>
</html>

