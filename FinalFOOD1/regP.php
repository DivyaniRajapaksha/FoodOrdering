<?php
session_start();
//require 'header.php';
require 'footer.php';
?>

        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type ="text/css" href="css/regP.css">
         <script src="js/formValid.js"></script>   
</head>
<header>
                <img src="images/head.jpg" style="width:99.3%;margin: 7px; opacity: 0.8;">

                <div class="menu1">
                <a href="slideShowP1.php">HOME</a>
                <a href="promotion12.php">PROMOS</a>
             
                <a href="feedBack .php">CONTACT US</a>
                <a href="contact.php">ABOUT US</a>
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
        
  
        input[type=submit]
             {
                width: 100%;
                background-color: #333;
                color: white;
                padding: 21px 5px;
                width:30%;

                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-style:normal;
                font-size:1.2em;
            }

            input[type=submit]:hover 
            {
                background-color: orangered;
            }

             input[type=reset]
             {
                width: 100%;
                background-color: #333;
                color: white;
                padding: 21px 5px;
                width:30%;

                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-style:normal;
                font-size:1.2em;
            }

            input[type=reset]:hover 
            {
                background-color: orangered;
            }

        </style>
        
<body><br><br><br><br>

      
        
<form action="regTest.php" onsubmit="return formValidation()" id="myForm" method="post" >
<fieldset>
        <legend>Create a new account</legend><br>
                <fieldset>  
                <pre>
                      
                    *First name:           <input type="text" id="firstname" name="firstname1" style="color:black" required maxlength="12" minlength="2"><br><br>
                    *Last name:            <input type="text" id="lastname" name="lastname" style="color:black" required maxlength="12" minlength="2" ><br><br>
                    *Password:             <input type="password" id="password" name="password" style="color:black" required  ><br><br>
                    *Confirm password:     <input type="password" id="conpassword" name="conpassword" style="color:black" required ><br><br>
                    *Email:                <input type="email" id="email" name="email" style="color:black" required><br><br>
                    *Contact number:       <input type="number" id="contact" name="contactnumber" style="color:black" required><br><br>
                    *No:                   <input type="text" id="address1" name="address1" style="color:black" required><br><br>
                    *Street:               <input type="text" id="address2" name="address2" style="color:black" required ><br><br>
                    *City:                 <input type="text" id="city" name="city" style="color:black" required><br><br>
                    *Post code:            <input type="text" id="code" name="postcode" style="color:black" required><br><br>
                </pre>    
                <br>
                </fieldset>
                <br><br>
                <br><br>
                
                <input id="sub" type="submit" value="Submit" name="submit" float="right">
                <input id="sub1" type="reset" value="Reset" name="reset" float="right">
 </fieldset>
</form>

 
</body>


        
</html>