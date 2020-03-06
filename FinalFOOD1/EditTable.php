<?php
require 'configLo.php';
?>
    <!-- Edit Table -->
    <?php
if(isset($_GET['id']))
{
    $submit_id=$_GET['id'];
    echo $submit_id;
} 
?>
<?php

if(!$conn)
{
    echo "Fail to connect MYSQL!".mysqli_connect_error();
}
else
{
    
    //echo $submit_id;

    $sql = "SELECT* FROM user WHERE Id='$submit_id'";
    //echo $sql;
    $result=mysqli_query($conn,$sql);

    if($result->num_rows>0) 
    { 
        ?>

        <?php while($row=$result->fetch_assoc())
         { ?>

        <!DOCTYPE html>
    <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type ="text/css" href="css/common.css">
        </head>
    <header>
                <img src="images/head.jpg" style="width:99.3%;margin: 7px; opacity: 0.8;">

                <div class="menu1">
                <a href="">HOME</a>
                <a href="">PROMOS</a>
                <!-- <a href="">FEEDBACK</a> -->
                <a href="">ABOUT US</a>
                <a href="">CONTACT US</a>
                </div>

        <form class="search">
                        <input type="text" name="search" placeholder="Search..">
        </form>


                <div id ="mySidenav" class="sidenav">
                    <a href="" id="tradi">Traditional</a>
                    <a href="" id="indian">Indian</a>
                    <a href="" id="italian">Italian</a>
                    <a href="" id="thai">Thai</a>
                </div>
        </header>

         <style>
           .acc2{
               font-style:normal;
                font-size:1.5em;
           }
  
            input[type=submit]
             {
                width: 100%;
                background-color: #333;
                color: white;
                padding: 14px 5px;
                width:30%;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-style:normal;
                font-size:0.8em;
            }

            input[type=submit]:hover 
            {
                background-color: orangered;
            }

        </style>

        <body><br><br><br><br><br>

         <fieldset>
            <form method="post" action="TableUpdate.php?id=<?php echo $row['Id']; ?>">
            <h1 class="title"align="center" >Edit Account</h1>
            <div class="acc2" align="center" >
                <pre>
                <div class="lable">First Name:      <input type="text" name="firstname" value="<?php echo $row['first_name'] ?>"<br><br></div>
                <div class="lable">Last Name:       <input type="text" name="lastname" value="<?php echo $row['last_name'] ?>"<br><br></div>
                <div class="lable">Password:        <input type="text" name="password" value="<?php echo $row['password'] ?>"<br><br></div>
                <div class="lable">Email:           <input type="email" name="email" value="<?php echo $row['email'] ?>"<br><br></div>
                <div class="lable">Contact Number:  <input type="text" name="contactNo" value="<?php echo $row['contact_no'] ?>"<br><br></div>
                <div class="lable">No:              <input type="text" name="add1" value="<?php echo $row['add_1'] ?>"<br><br></div>
                <div class="lable">Street:          <input type="text" name="add2" value="<?php echo $row['add_2'] ?>"<br><br></div>
                <div class="lable">City:            <input type="text" name="city" value="<?php echo $row['city'] ?>"<br><br></div>
                <div class="lable">Post Code:       <input type="text" name="postCode" value="<?php echo $row['post_code'] ?>"<br><br></div>
                <div class="lable">Type:            <input type="text" name="type" value="<?php echo $row['type'] ?>"<br><br></div>
            
                <input type="submit" name="submit1" value="Update">

            </pre>
            </form>
         </fieldset>
            <?php 
        }
    }
      else{
          echo "Error 1";
      }
    }
?>

<?php
mysqli_close($conn);
?>

<footer>
                <div class="foot">
                    <a href="">HOME</a>
                    <a href="">ABOUT US</a>
                    <a href="">FEEDBACK</a>
                    <a href="">CONTACT US</a>
                    <h3>Copyright Company 2013;All Right Reserved.</h3>
                <div>
                
                <!-- <div class="footlogo"> 
                    <a href="https://www.facebook.com/"> <img src="images/facebook.png" alt=""/></a>
                    <a href="https://about.twitter.com/en_us.html"> <img src="images/twitter.png"  alt=""/></a>
                    <a href="https://www.instagram.com/?hl=en"> <img src="images/Instagram.png" alt=""/></a>
                    <a href="https://www.google.com/"> <img src="images/google.png" alt=""/></a> 
                </div> -->
        </footer>

<br><br><br>
</body>
</html>
