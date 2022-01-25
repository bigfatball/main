<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- bootstrap5 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>  
    <!--java script  -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.11.4/css/dataTables.bootstrap5.min.css"/>
    
    <script type="text/javascript" src="DataTables/DataTables-1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"/>
    

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    
</head>
<body>
<!-- 菜單的頂部 style="display:none;" -->
<div  id = "BGMENU">
<nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class= "navigation">
    
    <button type="button" class="btn btn-dark" onclick ="save2()">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
    </svg>USER
    
    </button>
</div>
</nav>
<!-- 菜單的側面 -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="menu" aria-labelledby="menu" style="background-color:black ">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="menuLable" style="color: white">菜單</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" id = "MENU">
        <nav class="navbar" style="background-color:black " >
            <ul class="navbar-nav" >
                <li class="nav-item" >
                    <a class="nav-link" href="#" style = "color:white" onclick = "showfrom()">in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style = "color:white" >out</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style = "color:white" >hold</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style = "color:white" id="123" >data show</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</div>
<!-- 入貨表單 -->
<div style="border-width:3px;border-style:solid;border-color:#D3D3D3 ;padding:25px; margin:10px; border-radius:10px; display:none;"  id = "INVOICE_FROM">
  <div class="row">
      <div class="col-12">
    
    
    <input type="text" name="product_qty" id="PRODUCT_QTY" placeholder="product_qty" />
    
    
     
    
    
    <input type="button"  onclick = "save()"  value="提交" />
    <input type="button"  onclick = "save2()"  value="123" />
    
  </div>
<label id = "iid"></label>
  <div class ="row">
      <div class = "col-1">
  <select id="customer">  
    	<option>請選擇</option>
    </select> 
    
</div>
</div>
<div class ="row">
<div class = "col-1">
<select id="status">
<div class = "col-1">
    	<option>請選擇</option>
    </select>
</div>
</div>
<div class ="row">
<div class = "col-1">
<select id="staff">
    	<option>請選擇</option>
    </select> 
</div>
</div>
<div class ="row">
<div class = "col-1">
<select id="product" onchange="showqty()">
        <option>請選擇</option>
    	
    </select> 
    <label id = "qty"></label>
</div>
  </div>
</div>
</div>
</div>
<!-- 出貨表單 -->
<div style="border-width:3px;border-style:solid;border-color:#D3D3D3 ;padding:25px; margin:10px; border-radius:10px;display:none;"   id = "A">
  <div>
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="button"  value="提交" />
   
  </div>
</div>
<!-- hold貨表單 -->
<div style="border-width:3px;border-style:solid;border-color:#D3D3D3 ;padding:25px; margin:10px; border-radius:10px;display:none;"   id = "B">
  <div>
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
    <input type="button"  value="提交" />
    
  </div>
</div>
<!-- login表單 -->
<div style="border-width:3px;border-style:solid;border-color:#D3D3D3 ;padding:25px; margin:10px; border-radius:10px;"   id = "LOGIN">
  <div>
  <label>account:</label>
<input type="text" name="account" id="NAME" placeholder="product" />
<label>password:</label>
<input type="text" name="password" id="PASSWORD" placeholder="product_qty" />
<input type="button"  onclick = "login()"  value="提交" />
   
  </div>
</div>
<input type="text" name="password" id="no_iid" />

<!-- datatable -->
<div class="bs-example" style="display:none;" id = "DATATABLE">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Users List</h2>
</div>
<table id="usersListTable" class="display" style="width:100%">
<thead>
<tr>
<th>invoice_id</th>
<th>customer</th>
<th>product</th>
<th>status</th>
<th>staff</th>
<th>qty</th>
<th>qty_temp</th>
</tr>
</thead>
</table>
</div>
</div>        
</div>
</div>
<script>
// load data to datatable




        $(document).ready(function() {
    $('#usersListTable').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "conn.php",
            "type": "POST"
        },
        "columns": [
            { "data": "invoice_id" },
            { "data": "customer" },
            { "data": "product" },
            { "data": "status" },
            { "data": "staff" },
            { "data": "qty" },
            { "data": "qty_temp" }
        ]
    } );
} );
// save data to datatable
function save(){
    var iid = $("#no_iid").val();
    var FUN = "save"
    $.ajax({
        url:'conn.php',
        type:'post',
        data:{ "INVOICE": $("#INVOICE").val(),
        "PRODUCT_QTY" : $("#PRODUCT_QTY").val(),
        "CUSTOMER": $("#CUSTOMER").val(),
        "STATUS": $("#STATUS").val(),
        "STAFF": $("#STAFF").val(),
        "PRODUCT" : $("#PRODUCT").val(),
        "FUN" : FUN
        },
        dataType:"JSON",
        success: function () {
      
            alert("輸入異常!");
      } 
    });
}


function save2(){
    
    var FUN = "save"
    var PRODUCT = document.getElementById("product");
    var PRODUCT_V = PRODUCT.options[PRODUCT.selectedIndex].value;
    var PRODUCT_T = PRODUCT.options[PRODUCT.selectedIndex].text;

    var STAFF = document.getElementById("staff");
    var STAFF_V = STAFF.options[STAFF.selectedIndex].value;
    var STAFF_T = STAFF.options[STAFF.selectedIndex].text;

    var CUSTOMER = document.getElementById("staff");
    var CUSTOMER_V = CUSTOMER.options[CUSTOMER.selectedIndex].value;
    var CUSTOMER_T = CUSTOMER.options[CUSTOMER.selectedIndex].text;


    var iid = $("#no_iid").val();
    alert("1232122123!");
    $.ajax({
        url:'conn.php',
        type:'post',
        data:{ "INVOICE": iid,
        "PRODUCT_QTY" : $("#PRODUCT_QTY").val(),
        "CUSTOMER": customer_v,
        "STATUS": $("#STATUS").val(),
        "STAFF": staff_v,
        "PRODUCT" : product_v,
        "FUN" : FUN
        },
        dataType:"JSON",
        success: function () {
        
            alert("輸入異常!");
      } ,
      
    });


}
// customer 下拉選單
function showfrom1(){
   
    var FUN = "customer"
    $.ajax({
        type: 'POST',
        url: 'conn.php',
        data: {
            "FUN" : FUN
        },
        success: function (data){
            //取json中的值
            var a = data.split(' ');
            for (var i = 0;a.length-1; i++) {
                document.getElementById("customer").options[i+1]=new Option(JSON.parse(a[i]).customer,JSON.parse(a[i]).cid);     
        } 
        }
    })
}
// staff 下拉選單
function showfrom2(){
   
   var FUN = "staff"
   $.ajax({
       type: 'POST',
       url: 'conn.php',
       data: {
           "FUN" : FUN
       },
       success: function (data){
           //取json中的值
           var a = data.split(' ');
           for (var i = 0;a.length-1; i++) {
               document.getElementById("staff").options[i+1]=new Option(JSON.parse(a[i]).staff,JSON.parse(a[i]).sid);     
       } 
       }
   })
}
// status 下拉選單
function showfrom3(){
   
   var FUN = "status"
   $.ajax({
       type: 'POST',
       url: 'conn.php',
       data: {
           "FUN" : FUN
       },
       success: function (data){
           //取json中的值
           var a = data.split('+');
           for (var i = 0;a.length-1; i++) {
               document.getElementById("status").options[i+1]=new Option(JSON.parse(a[i]).status,JSON.parse(a[i]).sid);     
       } 
       }
   })
}
// product 下拉選單
function showfrom4(){
    alert ("輸入異常!");
   var FUN = "product"
   $.ajax({
       type: 'POST',
       url: 'conn.php',
       data: {
           "FUN" : FUN
       },
       success: function (data){
           //取json中的值
           var a = data.split('+');
           for (var i = 0;a.length-1; i++) {
               document.getElementById("product").options[i+1]=new Option(JSON.parse(a[i]).product,JSON.parse(a[i]).pid);     
               
       } 
       }
   })
}
function showfrom5() {
   
   var FUN = "iid"
   $.ajax({
       type: 'POST',
       url: 'conn.php',
       data: {
           "FUN" : FUN
       },
       success: function (data){
           //取json中的值
            var a = data.split(' ');
            var id = JSON.parse(a[0]).iid ;
            document.getElementById('iid').innerHTML = 'Invoice ID: ' + id ;
            document.getElementById('no_iid').value = id;
       
       }
   })
}
// menu in load function
function showfrom(){
    showfrom1();
    showfrom2();
    showfrom3();
    showfrom4();
    showfrom5();
    
}

// login
function login(){
    
    log("click","button resuock_form_sub click","null", "User action")
    var FUN = "login"
    $.ajax({
        url:'conn.php',
        type:'post',
        data:{ "NAME": $("#NAME").val(),
        "PASSWORD" : $("#PASSWORD").val(),
        
        "FUN" : FUN
        },
        dataType:"JSON",
        success: function (data) {
            alert (data["number"][0]);
            var FUN = data["number"][0];
            switch (FUN){
                case '1':
                    var DATATABLE = document.getElementById('DATATABLE');
                    var BGMENU = document.getElementById('BGMENU');
                    var INVOICE_FROM = document.getElementById('INVOICE_FROM');
                    var A = document.getElementById('A');
                    var B = document.getElementById('B');
                    
                    DATATABLE.style.display = 'block';
                    BGMENU.style.display = 'block';
                    INVOICE_FROM.style.display = 'block';
                    A.style.display = 'block';
                    B.style.display = 'block';
                    LOGIN.style.display = 'none';
                    break;
                case '2':
                    var DATATABLE = document.getElementById('DATATABLE');
                    var BGMENU = document.getElementById('BGMENU');
                    var INVOICE_FROM = document.getElementById('INVOICE_FROM');
                    var A = document.getElementById('A');
                    var B = document.getElementById('B');
                    var C = document.getElementById('123');
                    
                    DATATABLE.style.display = 'block';
                    BGMENU.style.display = 'block';
                    INVOICE_FROM.style.display = 'block';
                    A.style.display = 'block';
                    B.style.display = 'block';
                    LOGIN.style.display = 'none';
                    C.style.display = 'none';
                    break;
            }
            
      } 
    });
}
// log function
function log(TASKNAME, DESCRIPTION, VALUE, TYPE, FUN){
    var now = new Date();
    var YEAR = now.getFullYear(); //得到年份
    var MONTH = now.getMonth()+1;//得到月份
    var DATE = now.getDate();//得到日期
    var HOUR= now.getHours();//得到小时数
    var MINUTE= now.getMinutes();//得到分钟数
    var SECOND= now.getSeconds();//得到秒数
    var TIME = YEAR + "/" + MONTH + "/" + DATE +" " + HOUR+ ":" + MINUTE +  ":" + SECOND
    var LOG = "LOG";
    $.ajax({
	      url:'log.php',
	      type:'post',
	      data:{"TIME":TIME,"TASKNAME":TASKNAME, "DESCRIPTION":DESCRIPTION, "VALUE":VALUE,"TYPE":TYPE, "FUN":LOG},   //拼裝json陣列
	      // data:$("#fm").serialize(),   //直接從form表單中取出陣列
	      dataType:"JSON",
                    
	    });
  }
function showqty(){
    var FUN = "qty"
   $.ajax({
       type: 'POST',
       url: 'conn.php',
       data: {
           "FUN" : FUN
       },
       success: function (data){
           //取json中的值
           var a = data.split(' ');
           
           var pid = $("#product").val();
           
            
            document.getElementById('qty').innerHTML = 'Current quantity: ' +JSON.parse(a[pid-1]).product_qty ;
       
       }
   })
}
   
</script>
</body>
</html>