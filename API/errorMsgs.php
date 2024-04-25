<?php

$msgList = array(
  "001" => "データベース処理が異常終了しました",
  "002" => "変更内容がありません",
  "003" => "ユーザIDまたはパスワードが違います",
  "004" => "対象データが見つかりませんでした",
  "005" => "ささやき内容がありません",
  "006" => "ユーザIDが指定されていません",
  "007" => "パスワードが指定されていません",
  "008" => "ささやき管理番号が指定されていません",
  "009" => "検索区分が指定されていません",
  "010" => "検索文字列が指定されていません",
  "011" => "ユーザ名が指定されていません",
  "012" => "フォロユーザIDが指定されていません",
  "013" => "フォローフラグが指定されていません",
  "014" => "イイねフラグが指定されていません",
  "015" => "ログインユーザIDが指定されていません",
  "016" => "検索区分が不正です",
);

function setError($response, $errorNums){
  global $msgList;
  $response["result"] = "error";
  foreach ($errorNums as $errorNum) {
    $response["errCode"] .= $errorNum;
    $response["errMsg"] = $msgList[$errorNum];
  } 
  
  return $response;
}

// $response = [
//   "result" => "",
//   "errCode" => null,
//   "errMsg" => null,
//   "list" => []
// ];

// if($_SERVER["REQUEST_METHOD"] === "POST"){
//   $postData = json_decode(file_get_contents("php://input"), true);
// }

// if($postData["no"] == "1"){
//   $response = setError($response, "001");
// }


// if($response["result"] != "error"){ 
// }

?>