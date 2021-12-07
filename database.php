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


header("Content-type:text/html;charset=utf-8");
//$user = $_POST["username"];
//$pas = $_POST["password"];
//$fun = $_POST["function"];
//$json = array("username"=>$user, "password"=>$pas, "function"=>$fun);   //組合成json陣列
//$date = json_encode($json);  //編譯陣列轉化為json資料
//echo $date;  //將json資料傳回網頁



//mysqli_query($conn, 'set names utf8');

//$name = $_POST['name'];//取得name值
//$sql = "INSERT INTO goods (neme) VALUES ('$name') ";//插入表格語法
//mysqli_query($link, $sql) or die("錯誤訊息：".mysqli_error($link));//執行插入
//echo "資料插入成功！";//顯示訊息



if(empty($_POST["function"])) {
    $fun = "in";
}
else {
    $fun = $_POST["function"];
}


switch ($fun){
    case 'save':
        $user = $_POST["username"];
        $pas = $_POST["password"];
        $sql = "INSERT INTO goods(good_ID,name) VALUES ('$user','$pas') ";//插入表格語法
        mysqli_query($conn, $sql) or die("錯誤訊息：".mysqli_error($conn));//執行插入
        echo "資料插入成功！";//顯示訊息

        $conn->close();
    
    case 'in':
        $sql = "SELECT good_ID, name, cost, quantity FROM `goods`";
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
    default:
        echo "fail";

    }


    ?>
