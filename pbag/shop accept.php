<?php
	include 'config/connection.php';
	$id = $_REQUEST['id'];
	$query = "update shop_reg set status = 'Accept' where sid = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Successfully Accepted\");
					window.location = (\"Admin View Shop.php\")
				</script>";
	}
?>