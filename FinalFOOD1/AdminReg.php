<?php 
require 'header.php';
require 'footer.php';
require 'configLo.php';
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type ="text/css" href="css/regP.css"> 
         <script src="js/formValid.js"></script>  

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
            
            #acc{
                font-size:0.8em;
            }

      
            

        </style>

        </head>
                
        <br><br><br>

        <form id="adForm" action="admRegTest.php" onsubmit="return formValidation()" method="post">
            <br><br><br><br><br><br><br><br>
			<fieldset>
        <legend>Create a new account</legend>
            <fieldset>
                <pre>
                    *First name:           <input type="text" id="firstname" name="firstname" style="color:black" required maxlength="12" minlength="2"><br><br>
                    *Last name:            <input type="text" id="lastname" name="lastname" style="color:black" required maxlength="12" minlength="2" ><br><br>
                    *Password:             <input type="password" id="password" name="password" style="color:black" required  ><br><br>
                    *Confirm password:     <input type="password" id="conpassword" name="conpassword" style="color:black" required ><br><br>
                    *Email:                <input type="email" id="email" name="email" style="color:black" required><br><br>
                    *Contact number:       <input type="number" id="contact" name="contactnumber" style="color:black" required><br><br>
                    *No:                   <input type="text" id="address1" name="address1" style="color:black" required><br><br>
                    *Street:               <input type="text" id="address2" name="address2" style="color:black" required ><br><br>
                    *City:                 <input type="text" id="city" name="city" style="color:black" required><br><br>
                    *Post code:            <input type="text" id="code" name="postcode" style="color:black" required><br><br>
                    *type                  <select id="acc" name="type">
                                                <option value="Admin">Admin</option>
                                                <option value="Chef">Chef</option>
                                                <option value="Delivery Person">Delivery Person</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Customer">Customer</option>
                                           </select>
                                          
                </pre>
        
                <input class="sub" type="submit" name="submit" value="Submit" float:"right">
                <input class="sub" type="reset" name="reset" value="Reset" float:"right"><br><br>
                </fieldset>
            </fieldset>
           
        </form>    
    </body>

     
</html>
 
