<?php
$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "A@ss12345";
$DBNAME = "wms";
// 連接 MySQL 資料庫伺服器
$CONN = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DBNAME);
if ($CONN->connect_error) {
    die("連線失敗: " . $CONN->connect_error);
} 

mysqli_query($CONN, 'set names utf8');


//$NAME = "1";
    $NAME = $_POST['NAME'];//取得name值
    $SQL = "INSERT INTO goods (goods_ID ,name) VALUES ('11','$NAME') ";
    mysqli_query($CONN, $SQL) or die("錯誤訊息：".mysqli_error($CONN));//執行插入
    echo "資料插入成功！";//顯示訊息

//$sql = "SELECT goods_ID, name, cost, quantity FROM `goods`";
//$result = $conn->query($sql);

//if ($result->num_rows > 0) {
//    // 輸出資料
//    while($row = $result->fetch_assoc()) {
//        echo json_encode($row,JSON_UNESCAPED_UNICODE).' ';
//    }
//} else {
//    echo "0 結果";
//}
//$conn->close();

    ?>

