<?php

session_start();
$connect = mysqli_connect("localhost","root","","test_db");


if(isset($_POST["submitform"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count =count($_SESSION["shopping_cart"]);
			$item_array = array(
			'item_id'       => $_GET['id'],
			'item_no'     	=> $_POST['hidden_id'],
			'item_name'     => $_POST['hidden_name'],
			'item_price'    => $_POST['hidden_price'],
			'item_quantity' => $_POST['quantity']
			);
		$_SESSION["shopping_cart"][$count] = $item_array;
		echo '<script> window.location = "Italian.php" </script>';
		}
	else
		{
			echo '<script> alert("Item Already Added") </script>';
			echo '<script> window.location = "Italian.php" </script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'       => $_GET['id'],
			'item_no'     	=> $_POST['hidden_id'],
			'item_name'     => $_POST['hidden_name'],
			'item_price'    => $_POST['hidden_price'],
			'item_quantity' => $_POST['quantity']
		);
		$_SESSION["shopping_cart"][0] = $item_array;
		echo '<script> window.location = "Italian.php" </script>';
	}
}
	if(isset($_GET["action"]))
	{
			if($_GET["action"] == "delete")
			{
				foreach($_SESSION["shopping_cart"] as $keys => $values)
				{
					if($values["item_id"] == $_GET["id"])
					{
						unset($_SESSION["shopping_cart"][$keys]);
						echo '<script> alert("Item Removed")</script>';
						echo '<script> window.location = "Italian.php" </script>';
					}
					
				}
				
			}
	}
?>