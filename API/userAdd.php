<?php
require_once 'mysqlConnect.php';

$pdo = connect_db();




require_once 'mysqlClose.php'; // Include file chứa hàm ngắt kết nối
disconnect_db($pdo);
?>