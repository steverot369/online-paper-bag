<?php
	include 'config/connection.php';
	$id = $_REQUEST['id'];
	$query = "update shop_reg set status = 'Reject' where sid = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Successfully reject\");
					window.location = (\"Admin View Shop.php\")
				</script>";
	}
?>