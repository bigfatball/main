<?php

//$user = $_POST["username"];
//$pas = $_POST["password"];
//$fun = $_POST["function"];
//$json = array("username"=>$user, "password"=>$pas, "function"=>$fun);   //組合成json陣列
//$date = json_encode($json);  //編譯陣列轉化為json資料
//echo $date;  //將json資料傳回網頁


header("Content-type:text/html;charset=utf-8");
//mysqli_query($conn, 'set names utf8');

//$name = $_POST['name'];//取得name值
//$sql = "INSERT INTO goods (neme) VALUES ('$name') ";//插入表格語法
//mysqli_query($link, $sql) or die("錯誤訊息：".mysqli_error($link));//執行插入
//echo "資料插入成功！";//顯示訊息
if (empty($_POST["TIME"])){
    $_POST["TIME"]="";
    $_POST["TASKNAME"]="";
    $_POST["DESCRIPTION"]="";
    $_POST["VALUE"]="";
    $_POST["TYPE"]="";


}



if ($_POST["TYPE"]="User action") {
    
    $TIME = $_POST["TIME"];
    $TASKNAME = $_POST["TASKNAME"];
    $DESCRIPTION = $_POST["DESCRIPTION"];
    $VALUE = $_POST["VALUE"];
    $TYPE = $_POST["TYPE"];
    SAVE_LOG($TIME,$TASKNAME ,$DESCRIPTION,$VALUE ,$TYPE);
    
    }

function SAVE_LOG($TIME,$TASKNAME ,$DESCRIPTION,$VALUE ,$TYPE){
    $HOSTNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "A@ss12345";
    $DBNAME = "log";
// 連接 MySQL 資料庫伺服器
    $CONN = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DBNAME);
    if ($CONN->connect_error) {
        die("連線失敗: " . $CONN->connect_error);
    } 


    
    $SQL = "INSERT INTO log(time,taskname,description,value, type) VALUES ('$TIME','$TASKNAME' ,'$DESCRIPTION','$VALUE' ,'$TYPE') ";//插入表格語法
    mysqli_query($CONN, $SQL) or die("錯誤訊息：".mysqli_error($conn));//執行插入
    echo "資料插入成功！";//顯示訊息

    

}
    
    

    

    


    ?>
