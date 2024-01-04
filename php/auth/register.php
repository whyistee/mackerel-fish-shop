<?php
require_once('../config/config.php');

if (!$conn) {
	header("Status: 404 Not Found");
	die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้ " . mysqli_connect_error());
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO `member`( `test_name`, `test_lname`, `test_user`, `test_pass`, `test_status`) VALUES ('" . $firstname . "','" . $lastname . "', '" . $username . "','" . $password . "', 'CUSTOMER');";

if (mysqli_query($conn, $sql)) {
	echo "บันทึกข้อมูลสำเร็จ...";
	echo "<meta http-equiv=\"Refresh\" content=\"1; URL=https://waraporn.cmtc.ac.th/student/student65/u65301280005/mackerel-fish-shop-new/pages/auth/login.html\">";
	// echo "<meta http-equiv=\"Refresh\" content=\"1; URL=http://localhost/mackerel-fish/pages/auth/login.html\">";
}

mysqli_close($conn);
?>