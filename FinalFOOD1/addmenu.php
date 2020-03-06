<style>
body{background:url(images/backa.jpg) no-repeat; background-size:100%;}	
ul{
	list-style-type: none;
    margin: 8px;
    padding:10px;
    width: 18%;
    background-color:gray;
    position: stiky;
    height: 62%;
    overflow: auto;
	 font-size: 25px;}
li a{
    display: block;
    padding:18px 16px;
    text-decoration: none;
    color: white;
	 font-size: 25px;
	
	}

li a:hover{
    background-color: orange;
	color: white;}
	

#search{
 position: absolute;
 top: 57.5%;
 left: 55%;
 width:400px;
 padding:10px 1px;
 height:43px;
 margin:1px;
 color:white;
 border: 5px solid #555;
 font-size: 17px;
 background-color:#555;
}

#btn1,#btn2{
         position: absolute;
         top: 60.5%;
         left: 92%;
         transform: translate(-50%, -50%);
         -ms-transform: translate(-50%, -50%);
         background-color: #555;
         color: white;
         font-size: 16px;
         padding: 12px 25px;
         border: none;
         cursor: pointer;
         border-radius: 5px;
		 text-align: center;
		 text-decoration:none;
	 }
#btn2{
	position: absolute;
         top: 60.5%;
         left:85%;

}	 

.table th,td{
            border: 2px solid white;
			border-collapse: collapse;
			color:white;
			font-size:21px;
}
.table{position:absolute;
top:65%;
left:40%;
}
</style>

		<div>
		<ul>
		<li><a class="active1" href="adminedit1.php">Edit Menu</a></li>
		<li><a href ="CusDetails.php"> User Admin</a></li>
		<li><a href="promotion12.php">Promotion Managment</a></li>
		<li><a href="feedback12.php">Feedback Managment</a></li>
		<li><a href="AdminReg.php">Registration</a></li>
		</ul>
		</div>