<!DOCTYPE html>

<html>
<head>

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

            <div class="first">
            <form  enctype="multipart/form-data" id="form" method="post" name="form">
            
           <br><br>
           <span class="spn1">Name:</span><br>
           <input class="one" type = "text" name = "name"  > <br/>

           <span class="spn2">Food Item:</span><br>
           <input class ="two" id="file" name="file" type="file" style= "color:white;"><br>

          <span class="spn3"> Current Price:</span><br>
          <input class="three" type = "text" name="currentprice"><br/>

           <span class="spn4">Last Price:</span><br>
           <input class="four" type ="text" name ="lastprice"><br/>

           <span class="spn5">Description:</span><br>
           <textarea rows="4" cols="50" id="descrip" name="description" style="color:black;background:rgb(184, 184, 184); margin-left:30px; border-style:none;height:80px; width:350px; "></textarea><br/>
        
           <input id="submit" name="submit" type="submit" value="Upload" style="background-color:#4CAF50; color:white; padding:10px 15px; border:none;
             border-radius:4px; cursor:pointer; float:left; margin-top:20px; margin-left:30px;"  >
                </form>
                <?php

if (isset($_POST['submit'])) {
echo "abc";
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 5000000)) {

if ($_FILES["file"]["error"] > 0) {
echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
} else {

echo "<span>Your File Uploaded Succesfully...!!</span><br/>";

if (file_exists("upload/" . $_FILES["file"]["name"])) {
echo $_FILES["file"]["name"] . " <b>already exists.</b> ";
} else {
move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);
$path = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'. "uploads/" . $_FILES["file"]["name"];
echo "<b>Stored in:</b><a href = '$path' target='_blank'> " .$path.'<a>';

}
}
}
else {
echo "<span>***Invalid file Size or Type***<span>";
}
}
?>
<?php
 require 'config.php';
 ?>

<?php
    
        if(isset($_POST["submit"]))
         {
            
            global $path;
            $name=$_POST["name"];
            $current_price=$_POST["currentprice"];
            $last_price=$_POST["lastprice"];
            $description=$_POST["description"];
            

 $sql= "INSERT INTO `promotion` (`id`, `name`, `image`, `current_price`, `last_price`, `description`) VALUES (NULL, '$name', '$path', '$current_price', '$last_price', '$description')";
 
    echo $sql;
            
     if(mysqli_query($conn,$sql)==TRUE)
     {
        echo "Inserted successfully";
        header("Location:promotion12.php");
        
    }

else{
    echo "Errrrr:".$conn->error;
    }
    


mysqli_close($conn);	
    
 }
?>
</html>