<?php

$con = mysqli_connect("localhost","root","","farmdb");
if (mysqli_connect_errno()) {
	echo "failed to connect" . mysqli_connect_errno();
	# code...
}
?>