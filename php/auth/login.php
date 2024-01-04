<?php
session_start();
require_once('../config/config.php');

$sql = "SELECT * FROM member WHERE test_user = '" . mysqli_real_escape_string($conn, $_POST['username']) . "' and test_pass = '" . mysqli_real_escape_string($conn, $_POST['password']) . "'";

$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);

if (!$result) {
	header("Status: 401 Unauthorized");
	echo "ชื่อผู้ใช้ หรือ รหัสผ่าน ผิดพลาด!";
	echo "<meta http-equiv=\"Refresh\" content=\"1; URL=https://waraporn.cmtc.ac.th/student/student65/u65301280005/mackerel-fish-shop-new/pages/auth/login.html\">";
	// echo "<meta http-equiv=\"Refresh\" content=\"1; URL=http://localhost/mackerel-fish/pages/auth/login.html\">";
} else {
	$_SESSION["test_id"] = $result["test_id"];
	$_SESSION["test_status"] = $result["test_status"];

	session_write_close();
	echo "Login success!...";
	echo "<meta http-equiv=\"Refresh\" content=\"1; URL=https://waraporn.cmtc.ac.th/student/student65/u65301280005/mackerel-fish-shop-new/\">";
	// echo "<meta http-equiv=\"Refresh\" content=\"1; URL=http://localhost/mackerel-fish/pages/auth/login.html\">";
}
mysqli_close($conn);
?>