<!DOCTYPE html>

<html>
<head>
<title>下拉式選單測試</title>
</head>
<body>
    <select id="shopList">
    	<option></option>
    </select>  
</body>
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "warehouse";

$conn = new mysqli($hostname, $username, $password, $dbname);

$sql = "select * from customer;";
$result = $conn->query($sql);




if(!$result){
   	echo "Execute SQL failed : ". mysql_error();
	exit;
}
$shopCodeArr=array();     //用來存哪些選項的陣列
$shopCount=0;
while($rows=mysqli_fetch_array($result))
{
	$shopCodeArr[$shopCount]=$rows['customer'];
	$cid[$shopCount]=$rows['cid'];
	$shopCount++;
}
for($i=0;$i<count($shopCodeArr);$i++)
{
	echo "<script type=\"text/javascript\">";
	echo "document.getElementById(\"shopList\").options[$i]=new Option(\"$shopCodeArr[$i]\",\"$cid[$i]\");";
	echo "</script>";
}
?>
</html>