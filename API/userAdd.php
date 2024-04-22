<?php
require_once 'mysqlConnect.php';
$pdo = connect_db();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = json_decode(file_get_contents('php://input'), true);
    
    // Kiểm tra tất cả các biến trong $postData
    if (!empty($postData['userId']) && !empty($postData['userName']) && !empty($postData['password']) && !empty($postData['profile']) && !empty($postData['iconPath'])) {
        // Sử dụng prepared statements để tránh SQL Injection
        $sql = "INSERT INTO user (userId, userName, password, profile, iconPath) VALUES (:userId, :userName, :password, :profile, :iconPath)";

        try {
            $stmt = $pdo->prepare($sql);
            // Bind parameters
            $stmt->bindParam(':userId', $postData['userId']);
            $stmt->bindParam(':userName', $postData['userName']);
            $stmt->bindParam(':password', $postData['password']);
            $stmt->bindParam(':profile', $postData['profile']);
            $stmt->bindParam(':iconPath', $postData['iconPath']);

            // Thực thi truy vấn
            $stmt->execute();
            echo "Ghi vào cơ sở dữ liệu thành công!";
        } catch (PDOException $e) {
            // Xử lý ngoại lệ
            echo "Lỗi: " . $e->getMessage();
        }
    } else {
        // Xử lý khi có biến trống
        echo "Có biến trống trong dữ liệu đầu vào!";
    }
}

require_once 'mysqlClose.php'; // Include file chứa hàm ngắt kết nối
disconnect_db($pdo);
?>
