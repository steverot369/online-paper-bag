<?php

$conn=mysqli_connect("localhost","root","","pbag");
if(!$conn)
{
    // echo "connection error".mysqli_connect_error();
    echo "<script>alert('error databse not found') </script>";
}

?>