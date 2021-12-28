<?php 
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
SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns , $where));

?>