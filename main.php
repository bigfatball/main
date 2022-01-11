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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    
</head>
<body>



<nav class="navbar navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="menu">

        <span class="navbar-toggler-icon"></span>
    </button>

    <div class= "navigation">
    
    <button type="button" class="btn btn-dark">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
    </svg>USER
    
    </button>
</div>
</nav>


<div class="offcanvas offcanvas-start" tabindex="-1" id="menu" aria-labelledby="menu" style="background-color:black ">

    <div class="offcanvas-header">

        <h5 class="offcanvas-title" id="menuLable" style="color: white">菜單</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>

    </div>


    <div class="offcanvas-body">
        <nav class="navbar" style="background-color:black " >
            <ul class="navbar-nav" >

                <li class="nav-item" >
                    <a class="nav-link" href="#" style = "color:white" onclick = "showfrom()">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style = "color:white">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style = "color:white">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style = "color:white">Link 1</a>
                </li>
            </ul>
        </nav>

    </div>

</div>




<div style="border-width:3px;border-style:solid;border-color:#D3D3D3 ;padding:25px; margin:10px; border-radius:10px;" >
  <div class="row">
      <div class="col-12">
    
    <input type="text" name="invoice" id="INVOICE" placeholder="invoice" />
    <input type="text" name="customer" id="CUSTOMER" placeholder="customer" />
    <input type="text" name="status" id="STATUS" placeholder="status" />
    <input type="text" name="staff" id="STAFF" placeholder="staff" />
    <input type="text" name="product" id="PRODUCT" placeholder="product" />
    <input type="text" name="product_qty" id="PRODUCT_QTY" placeholder="product_qty" />
    
    
     

    

    
    <input type="button"  onclick = "save()"  value="提交" />
    
  </div>


  <div class ="row">
      <div class = "col-1">
  <select id="shopList">
    	<option></option>
    </select> 
</div>
</div>

<div class ="row">
<div class = "col-1">
<select id="status">
<div class = "col-1">
    	<option></option>
    </select>
</div>
</div>

<div class ="row">
<div class = "col-1">
<select id="staff">
    	<option></option>
    </select> 
</div>
</div>

<div class ="row">
<div class = "col-1">
<select id="product">
    	<option value ="0"></option>
    </select> 
</div>
  </div>
</div>
</div>
</div>


<div style="border-width:3px;border-style:solid;border-color:#D3D3D3 ;padding:25px; margin:10px; border-radius:10px;" >
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
<div style="border-width:3px;border-style:solid;border-color:#D3D3D3 ;padding:25px; margin:10px; border-radius:10px;" >
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





<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Users List</h2>
</div>
<table id="usersListTable" class="display" style="width:100%">
<thead>
<tr>
<th>invoice</th>
<th>product</th>
<th>customer</th>
<th>status</th>
<th>staff</th>
<th>qty</th>
</tr>
</thead>

</table>
</div>
</div>        
</div>
</div>



<script>


$(document).ready(function(){
    $('#usersListTable').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "conn.php",
            "type": "POST"
        },
        "columns": [
            { "data": "PRODUCT" },
            { "data": "CUSTOMER" },
            { "data": "STATUS" },
            { "data": "STAFF" },
            { "data": "QTY" },
            { "data": "QTY_TEMP" }


                ]
            });
        });


function save(){
    
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
                document.getElementById("shopList").options[i]=new Option(JSON.parse(a[i]).customer,JSON.parse(a[i]).cid);     
        } 
        }
    })
}


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
               document.getElementById("staff").options[i]=new Option(JSON.parse(a[i]).staff,JSON.parse(a[i]).sid);     
       } 
       }
   })
}


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
           var a = data.split(' ');
           for (var i = 0;a.length-1; i++) {
               document.getElementById("status").options[i]=new Option(JSON.parse(a[i]).status,JSON.parse(a[i]).sid);     
       } 
       }
   })
}


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
               document.getElementById("product").options[i]=new Option(JSON.parse(a[i]).product,JSON.parse(a[i]).pid);     
       } 
       }
   })
}





function showfrom(){
    
    showfrom1();
    showfrom2();
    showfrom3();
    showfrom4();


    
}
</script>
</body>
</html>