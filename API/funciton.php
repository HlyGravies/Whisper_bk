<?php
    function validateUserData($postData){
        $errorNum;
    if (empty($postData['userId'])) {
        $errorNum[] = "";
    } elseif (strlen($postData['userId']) > 30) {
        $errorNum[] = "";
    }

    if (empty($postData['userName'])) {
        $errorNum[] = "";
    } elseif (strlen($postData['userName']) > 20) {
        $errorNum[] = "";
    }

    if (empty($postData['password'])) {
        $errorNum[] = "";
    } elseif (strlen($postData['password']) > 64) {
        $errorNum[] = "";
    }

    if (!empty($postData['profile'])) {
        $errorNum[] = "";
    }elseif(mb_strlen($postData['profile'], 'UTF-8') > 200){
        $errorNum[] = "";
    }

    if (!empty($postData['iconPath'])) {
        $errorNum[] = "";
    }elseif(strlen($postData['iconPath']) > 100){

    }
        return $errorNum;
    }

    function getUserInfo($pdo, $userId) {
        $getUserSql = "SELECT userId, userName, profile, iconPath FROM user WHERE userId = :userId";
        $getUserStmt = $pdo->prepare($getUserSql);
        $getUserStmt->bindParam(':userId', $userId);
        $getUserStmt->execute();
        return $getUserStmt->fetch(PDO::FETCH_ASSOC);
    }
?>