<?php
	include 'config/connection.php';
	$id = $_REQUEST['id'];
	$query = "delete from products where product_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Successfully deleted\");
					window.location = (\"Shop View My Product.php\")
				</script>";
	}
?>