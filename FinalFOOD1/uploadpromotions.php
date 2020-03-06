<!DOCTYPE html>

<html>
<head>
<?php  if(isset($_GET['id'])){
		$id=$_GET['id'];
		
    }?>
    <?php
     require 'config.php';
     ?>

<style>
  body{background:url(images/bl.jpg);
   background-size:cover;} 

  .first{
      width:500px;
      height:600px;
      float:left;
      padding:10px 50px;
      margin:3% 30%;
      margin-left:300px;
      border:2px solid;      
      background-image:url("images/war.jpg");
      background-position:center;
      background-repeat:no-repeat;
      background-size:cover;
      position:relative;
      
      
  }

  .spn1{
      font-size:20px;
      margin-left:30px;
      color:white;
      
  }

  .one{
    width:300px;
      padding:10px;
      border:3px solid elelel;
      margin-bottom:25px;
      margin-left:30px;
  }

  .two{
      width:300px;
      padding:10px;
      border:3px solid elelel;
      margin-bottom:25px;
      margin-left:30px;
  }

  .spn2{
      font-size:20px;
      margin-left:30px;
      color:white;

  }


  .spn3{
    font-size:20px;
    margin-left:30px;
    color:white;

  }

  .three{
      width:300px;
      padding:10px;
      border:3px solid elelel;
      margin-bottom:25px;
      margin-left:30px;
  }

  .spn4{
    font-size:20px;
    margin-left:30px;
    color:white;

  }

  .four{
      width:300px;
      padding:10px;
      border:3px solid elelel;
      margin-bottom:25px;
      margin-left:30px;
  }

  .spn5{
    font-size:20px;
    margin-left:30px;
    color:white;

  }

  
     
  


</style>
</head>
<body>     
    <br><br> 
    <?php
	global $id;
	
    $sql = "SELECT * FROM promotion WHERE `id`=$id";
   $result = mysqli_query($conn,$sql);
	
	if($result->num_rows>0)
	{
	?>
            
            <?php while($row =$result->fetch_assoc()){?>
                <div class="first">
                <form  enctype="multipart/form-data" id="form" method="POST" name="form" action="updatepromotions.php?id=<?php echo $row['id'];?>">
            
           <br><br>
           <span class="spn1">Name:</span><br>
           <input class="one" type = "text" name = "name"  value="<?php echo $row['name'];?>"> <br/>


          <span class="spn3"> Current Price:</span><br>
          <input class="three" type = "text" name="currentprice"  value="<?php echo $row['current_price'];?>"><br/>

           <span class="spn4">Last Price:</span><br>
           <input class="four" type ="text" name ="lastprice" value="<?php echo $row['last_price'];?>"><br/>

           <!--<span class="spn5">Description:</span><br>
           <textarea rows="4" cols="50" id="descrip" name="description" value="<?php echo $row['description'];?>"  style="color:black;background:rgb(184,184,184);margin-left:30px;border-style:none;height:80px;width:350px; "></textarea><br/>-->
        
           <input id="submit" name="submit" type="submit" value="Upload" style="background-color:#4CAF50; color:white; padding:10px 15px; border:none;
             border-radius:4px; cursor:pointer; float:left; margin-top:20px; margin-left:30px;"  >
                </form>
                <?php }
	}
	else {
		echo"error";
		}?>
