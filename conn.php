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

        $SQL = "INSERT INTO inventory(invoice_id, product_id, customer_id, status_id, staff_id, qty) VALUES ('$INVOICE','$PRODUCT','$CUSTOMER','$STATUS','$STAFF','$PRODUCT_QTY')";

        mysqli_query($CONN,$SQL) or die("fail messenger:".mysqli_error($CONN));
        break;

    ## 讀取資料至datatable
    case 'in';
        $SQL = "SELECT * FROM `inventory.info`";
        $RESULT = mysqli_query($CONN, $SQL);
        $DATA = array();
    
        while ($ROW = mysqli_fetch_assoc($RESULT)) {
            $DATA[] = array(
                "PRODUCT"=>$ROW['product'],
                "CUSTOMER"=>$ROW['customer'],
                "STATUS"=>$ROW['STATUS'],
                "STAFF"=>$ROW['staff'],
                "QTY"=>$ROW['qty'],
                "QTY_TEMP"=>$ROW['qty_temp']
            );
        }
    
        ## Response
        $RESPONSE = array(
            "draw" => "1",
            "recordsTotal" => "3",
            "recordsFiltered" => "3",
            "data" => $DATA
        );
    
        echo json_encode($RESPONSE);
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
        
        $SQL = "select MAX(invoice_id) from inventory";
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
    
    }

    

        

?>




