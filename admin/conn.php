<?php

$conn = mysqli_connect("localhost", "root", "", "coaching");
if ($conn != true) {
	echo "Connection failed." . mysqli_error($conn);
	exit();
}
