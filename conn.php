<?php
$HOST = "localhost";
$USER = "root";
$PASSWORD = "A@ss12345";
$DBNAME = "warehouse";

$CONN = mysqli_connect($HOST, $USER, $PASSWORD, $DBNAME);


if (!$CONN){

    die("Connection failed: "). mysqli_connect_error();

}



if(empty($_POST["FUN"])) {
    $FUN = "in";
}
else {
    $FUN = $_POST["FUN"];
}



switch ($FUN){
    ## 儲存資料至SQL
    case 'save':
        $INVOICE = $_POST["INVOICE"];
        $PRODUCT_QTY = $_POST["PRODUCT_QTY"];
        $CUSTOMER = $_POST["CUSTOMER"];
        $STATUS = $_POST["STATUS"];
        $STAFF = $_POST["STAFF"];
        $PRODUCT = $_POST["PRODUCT"];

        $SQL = "INSERT INTO inventory(invoice_id, product_id, customer_id, status_id, staff_id, qty_temp) VALUES ('$INVOICE','$PRODUCT','$CUSTOMER','$STATUS','$STAFF','$PRODUCT_QTY')";

        mysqli_query($CONN,$SQL) or die("fail messenger:".mysqli_error($CONN));
        break;

    ## 讀取資料至datatable
    case 'in';
    $table = 'inventory.info';
 
    // Table's primary key
    $primaryKey = 'invoice_id';
     
    // Array of database columns which should be read and sent back to DataTables.
    // The `db` parameter represents the column name in the database, while the `dt`
    // parameter represents the DataTables column identifier. In this case object
    // parameter names
    $columns = array(
        array( 'db' => 'invoice_id', 'dt' => 'invoice_id' ),
        array( 'db' => 'customer',  'dt' => 'customer' ),
        array( 'db' => 'product',   'dt' => 'product' ),
        array( 'db' => 'status',     'dt' => 'status' ),
        array( 'db' => 'staff',     'dt' => 'staff' ),
        array(  'db' => 'qty',     'dt' => 'qty' ),
        array(  'db' => 'qty_temp',     'dt' => 'qty_temp' )
    );
     
    // SQL server connection information
    $sql_details = array(
        'user' => 'root',
        'pass' => 'A@ss12345',
        'db'   => 'warehouse',
        'host' => '127.0.0.1'
    );
     
     
    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * If you just want to use the basic configuration for DataTables with PHP
     * server-side, there is no need to edit below this line.
     */
     
    require( 'ssp.class.php' );
     
    echo json_encode(
        SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
    );
    
    break;

    ## 讀取customer資料
    case "customer";


        $SQL = "select cid,customer from customer";
         $RESULT = $CONN->query($SQL);

       
// 輸出資料
         while($ROW = $RESULT->fetch_assoc()) {
            echo json_encode($ROW,JSON_UNESCAPED_UNICODE).' ';
        }

    
        break;
    ## 讀取staff資料
    case "staff";
        $SQL = "select sid,staff from staff";
        $RESULT = $CONN->query($SQL);

  
// 輸出資料
        while($ROW = $RESULT->fetch_assoc()) {
            echo json_encode($ROW,JSON_UNESCAPED_UNICODE).' ';
        }


        break;

    ## 讀取status資料
    case "status";
        
        $SQL = "select sid,status from status";
        $RESULT = $CONN->query($SQL);


// 輸出資料
        while($ROW = $RESULT->fetch_assoc()) {
            echo json_encode($ROW,JSON_UNESCAPED_UNICODE)." ";
        }
        break;
        
    ## 讀取product資料
    case "product";
        
        $SQL = "select pid,product from product";
        $RESULT = $CONN->query($SQL);


// 輸出資料
        while($ROW = $RESULT->fetch_assoc()) {
            echo json_encode($ROW,JSON_UNESCAPED_UNICODE).'+';
        }
    break;
    

    ## 讀取最大的單號
    case "iid";
        
        $SQL = "select MAX(invoice_id) +1 AS iid from inventory";
        $RESULT = $CONN->query($SQL);


// 輸出資料
        while($ROW = $RESULT->fetch_assoc()) {
            echo json_encode($ROW,JSON_UNESCAPED_UNICODE).' ';
        }
    break;


    ## 找查帳號的權限
    case "login";
        
        $NAME = $_POST["NAME"];
        $PASSWORD = $_POST["PASSWORD"];

        $VALUE = $NAME . "," . $PASSWORD;
        
        $TIME = date("Y-m-d H:i:s");
        $TASKNAME = "login function";
        $DESCRIPTION = "save data to db";
        $TYPE = "system";
        require_once('log.php');
        SAVE_LOG($TIME,$TASKNAME ,$DESCRIPTION,$VALUE ,$TYPE);


        $SQL = "SELECT number FROM `user` WHERE name = '$NAME' and password = '$PASSWORD';";

        
        
        $RESULT = mysqli_query($CONN, $SQL);
        $ROW = mysqli_fetch_assoc($RESULT);

        echo json_encode($ROW,JSON_UNESCAPED_UNICODE);
        
    break;


    case "qty";
        
    $SQL = "select pid,product_qty  from product";
    $RESULT = $CONN->query($SQL);


// 輸出資料
    while($ROW = $RESULT->fetch_assoc()) {
        echo json_encode($ROW,JSON_UNESCAPED_UNICODE).' ';
    }
break;

    
    }

    

        

?>




