<?php
$hostname = "localhost";
$username = "root";
$password = "A@ss12345";
$dbname = "wms";
// 連接 MySQL 資料庫伺服器
$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
} 

mysqli_query($conn, 'set names utf8');
$sql = "SELECT goods_ID, name, cost, quantity FROM `goods`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 輸出資料
    while($row = $result->fetch_assoc()) {
        echo json_encode($row,JSON_UNESCAPED_UNICODE).' ';
    }
} else {
    echo "0 結果";
}
$conn->close();

    ?>


