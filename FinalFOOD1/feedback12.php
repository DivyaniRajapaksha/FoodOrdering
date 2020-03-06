<?php
     require 'config.php';
     ?>
<?php require 'addmenu.php';?>

<?php

if(!$conn)
{
    echo "Fail to connect to MYSQL!".mysqli_connect_error();
}


   $sql = "SELECT * FROM feedback";
   $result = mysqli_query($conn,$sql);
   ?>

     <!DOCTYPE html>
     <html>
         <head>
         <style>

         body{
             background:url(images/war.jpg);
             background-size:auto;
             
        
            }

      .tb1{
        border:2px solid black;
        width:500px;
        margin-left:250px;
        margin-top:100px;
        color:white;


      }
      
      .tr,td,th{
        border:2px solid black;
        padding:8px;
        
      }

   </style>
   </head>
    
    <body>
        <table class="tb1" >
            <thead>
           <tr>
  
              <th>Type</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Contact Number</th>
              <th>Message</th>
              
             
</tr>
</thead>
<tbody>

   <?php
    while($row=$result->fetch_assoc()){
    ?>
     <tr>
             
                   <td><?php echo $row['type']?></td>
                   <td><?php echo $row['first_name']?>
                   <td><?php echo $row['last_name']?></td>
                   <td><?php echo $row['email']?></td>
                   <td><?php echo $row['contact_number']?></td>
                   <td><?php echo $row['message']?></td>
                    
            
</tr>

</tbody>
    </body>
    <?php } ?>
  
   

    </html>