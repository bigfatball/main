<?php
	header("Content-type:text/html;charset=utf-8");
	$user = $_POST["username"];
	$pas = $_POST["password"];
	$json = array("username"=>$user, "password"=>$pas);   //組合成json陣列
	$date = json_encode($json);  //編譯陣列轉化為json資料
	echo $date;  //將json資料傳回網頁



    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wms";
    // 連接 MySQL 資料庫伺服器
    $conn = new mysqli($hostname, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("連線失敗: " . $conn->connect_error);
    } 
    
    mysqli_query($conn, 'set names utf8');
    
    
   //取得name值
    $sql = "INSERT INTO goods(ID,goods) VALUES ('$user','$pas') ";//插入表格語法
    mysqli_query($conn, $sql) or die("錯誤訊息：".mysqli_error($conn));//執行插入
    echo "資料插入成功！";//顯示訊息
    
    $conn->close();


?>
