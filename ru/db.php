<?php
$hostname = "localhost";
$username = "root";
$password = "";
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

// Database connection info 
$dbDetails = array( 
    'host' => 'localhost', 
    'user' => 'root', 
    'pass' => '', 
    'db'   => 'warehouse'
    ); 
    // mysql db table to use 
    $table = 'inventory'; 
    // Table's primary key 
    $primaryKey = 'iid'; 
    // Array of database columns which should be read and sent back to DataTables. 
    // The `db` parameter represents the column name in the database.  
    // The `dt` parameter represents the DataTables column identifier. 
    $columns = array( 
    array( 'db' => 'iid', 'dt' => 0 ), 
    array( 'db' => 'product_id',  'dt' => 1 ), 
    array( 'db' => 'customer_id',      'dt' => 2 ), 
    array( 'db' => 'status_id',     'dt' => 3 ), 
    array( 'db' => 'staff_id',    'dt' => 4 ), 
    array( 
    'db'        => 'qty_temp', 
    'dt'        => 5
    
    
    ), 
    
    ); 
    // Include SQL query processing class 
    require 'ssp.class.php'; 
    // Output data as json format 
    
    
    echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns ));
    
        break;
    default:
        echo "fail";

    }


    ?>