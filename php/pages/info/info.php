<?php
session_start();
require_once('../../config/config.php');
if (isset($_SESSION["test_status"])) {
    if ($_SESSION["test_status"] == "EMPLOYEE") {
        header("location:Employee_page.php");
    } else {
        header("location:Customer_page.php");
    }
}
?>