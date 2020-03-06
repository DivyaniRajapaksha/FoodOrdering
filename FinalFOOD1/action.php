
<!DOCTYPE html>
<head>
<style>

     body{
             background:url(images/ma.jpg);
             background-size:auto;
             
        
            }

    .form1{
        width:500px;
      height:800px;
      float:left;
      padding:10px 50px;
      margin:3% 30%;
      margin-left:300px;
      border:2px solid;      
      background-image:url("images/bl.jpg");
      background-position:center;
      background-repeat:no-repeat;
      background-size:cover;
      position:relative;
      
      
      
    }
  
     .spn1{
         font-size:20px;
         font-family:sans-serif;
         color:white;
     }
    legend{
        font-size:45px;
        color:white;
    }

    

    .div1{
        font-size:15px;
        font-family:sans-serif;
        position:absolute;
        color:white;
        

        
    }

    .box{
        width:250px;
        height:30px;
        position:absolute;
        left:200px;
        border:1px solid;
        
    }



    #sub1{
        width:100px;
        height:50px;
        background-color:green;
        border-radius:12px;
        color:white;
        position:absolute;
        left:750px;
        top:800px;
        
    }
    </style>

</head>

<body>

  <div class ="form1">
  <form action="action.php" method="post">

      <legend>Personal Information:</legend><br>
     
<pre>
        <span class="spn1">Type:</span><br>
        <select id="op" name="type" >
        <option value="feedbacktype">Feedback type</option>
        <option value="inquirytype">Inquiry type</option>
        <option value="orderinquiry">Order inquiry</option>
        <option value="complaint">Complaint</option>
        <option value="appreciation">Appreciation</option>
        <option value="suggestion">Suggestion</option>
        </select>
</pre>

<pre>

        
        <div class="div1"> *First Name:</div>
                   <input class="box" type="text" name="firstname" style="color:black"><br><br><br><br>
        <div class="div1">*Last Name:</div>           
                   <input class="box" type="text" name="lastname" style="color:black"><br><br><br><br>

       <div class="div1">*Email:</div>   
                    <input class="box" type="text" name="email" style="color:black"><br><br><br><br>
       <div class="div1">*Contact Number:</div>   
                   <input class="box" type="text" name="contactnumber" style="color:black"><br><br><br><br>
       <div class="div1" >*Message:</div><br>              
                   <textarea rows="4" cols="50" id="message" name="message" style="color:black; background:rgb(184, 184, 184); border-style:none; height:100px;"></textarea>
<br/>
</pre>
</div>

        <input id="sub1" type="submit" name="BtnSubmit" value="submit" float="right">
        
</form>



<br><br>


<?php 
        require 'config.php';
?>
<?php
        if(isset($_POST["BtnSubmit"]))
         {
            
        
            $type=$_POST["type"];
            $first_name=$_POST["firstname"];
            $last_name=$_POST["lastname"];
            $email=$_POST["email"];
            $contact_number=$_POST["contactnumber"];
            $message=$_POST["message"];

 $sql= "INSERT INTO `feedback`(`id`, `type`, `first_name`, `last_name`, `email`, `contact_number`, `message`) VALUES (NULL,'$type','$first_name','$last_name','$email','$contact_number','$message')";
    //echo $sql;
            
     if(mysqli_query($conn,$sql)==TRUE)
     {
        echo "Inserted successfully";
        header("location:adminedit1.php");
    }

else{
    echo "Errrrr:".$conn->error;
    }
    


mysqli_close($conn);	
    
 }
?>
