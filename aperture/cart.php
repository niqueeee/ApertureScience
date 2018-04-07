<?php include "connect.php";
	session_start();

	if (isset($_GET['id']) & !empty($_GET['id'])) {
		if (isset($_SESSION['cart']) & !empty($_SESSION['cart'])){

			$items= $_SESSION['cart'];
			$cartitems= explode(",", $items);
			if (in_array($_GET['id'], $cartitems)){
				header("Location: shop.php?status=incart");
				echo "<script type='text/javascript'>";
				echo "window.alert('Item added!')";
				echo "</script>";

			} else {
				$items= "," . $_GET['id'];
				$_SESSION['cart']= $items;
				header("Location: shop.php?status=success1");

			}

		} else { $items= "," . $_GET['id'];
				$_SESSION['cart']= $items;
				header("Location: shop.php?status=success2"); }

	} else {header("Location: shop.php?status=failed");}
?>

