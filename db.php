<?php
$hostname = "localhost";
$username = "root";
$password = "A@ss12345";
$dbname = "warehouse";
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
        $invoice = $_POST["invoice"];
        $product_qty = $_POST["product_qty"];
        $customer = $_POST["customer"];
        $company = $_POST["company"];
        $address = $_POST["address"];

       


        $sql = "INSERT INTO inventory(invoice,product_qty, customer,company,address ) VALUES (' $invoice','$product_qty', '$customer',' $company','$address') ";//插入表格語法
        mysqli_query($conn, $sql) or die("錯誤訊息：".mysqli_error($conn));//執行插入
        echo "資料插入成功！";//顯示訊息
        


      
        
        break;
    case 'in':

        $columns = array( 
            // datatable column index  => database column name
                0 => 'inventory_id',
                1 => 'status_id',
                2 => 'product_id',
                3 => 'item_id',
                4 => 'staff_id',
            );
            
        $sql = "SELECT * FROM history";
        $res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
        $dataArray = array();
        while( $row = mysqli_fetch_array($res) ) {
        
        
            $dataArray[] = $row["inventory_id"];
            $dataArray[] = $row["status_id"];
            $dataArray[] = $row["product_id"];
            $dataArray[] = $row["item_id"];
            $dataArray[] = $row["staff_id"];
            
        }
        
        echo json_encode($dataArray);
        break;
    default:
        echo "fail";

    }


    ?>
