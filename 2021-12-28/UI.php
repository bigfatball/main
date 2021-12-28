<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.6.0.slim.js"></script>
	<script src="js/jquery-3.6.0.min.js"></script>
  	<script src="js/popper.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    
	<style>
#navbarToggleExternalContent{
  transform: translateX(-100%);
  transition: transform .35s ease;
  display: block;
  height: 100%;
  min-height: 100%;
}
#navbarToggleExternalContent.menu-show{
  transform: translateX(0%);
}
nav > ul {
    list-style: none;   /* 移除項目符號 */
}
nav > ul {
    color: rgb(230, 230, 230);
    list-style: none;   /* 移除項目符號 */
    margin: 0;
    padding: 0;
}
nav a {
    color: inherit; /* 移除超連結顏色 */
    display: block; /* 讓 <a> 填滿 <li> */
    font-size: 1.2rem;
    padding: 10px;
    text-decoration: none;  /* 移除超連結底線 */
}
/* 滑鼠移到 <a> 時變成深底淺色 */
nav a:hover {
    background-color: rgb(115, 115, 115);
    color: white;
}
.navigation {
  float: right;
}
</style>
  </head>
  <body>
  
    
	<div class="pos-f-t">
  <nav class="navbar navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-expanded="false" aria-controls="navbarToggleExternalContent">
  <span class="navbar-toggler-icon"></span>
  </button>
    <div class= "navigation">
    
    <button type="button" class="btn btn-dark">
    <i class="bi bi-file-person-fill"></i>USER
    
</button>
</div>
  </nav>
  <div class="bg-dark collapse position-fixed" id="navbarToggleExternalContent">
  <div  >
    <!-- https://stackoverflow.com/a/10055302/9265131 -->
 
	  <nav>
    <ul>
        <li><a href="#">入貨</a></li>
        <li><a href="#">出貨</a></li>
        <li><a href="#">hold貨</a></li>
        <li><a href="#">查貨</a></li>

    </ul>
</nav>
  </div>
</div>




<div style="border-width:3px;border-style:solid;border-color:#D3D3D3 ;padding:25px; margin:10px; border-radius:10px;" >




  <div>
    
    <input type="text" name="invoice" id="invoice" placeholder="請輸入使用者名稱" />
    <input type="text" name="product_qty" id="product_qty" placeholder="請輸入使用者名稱" />
    <input type="text" name="customer" id="customer" placeholder="請輸入使用者名稱" />
    <input type="text" name="company" id="company" placeholder="請輸入使用者名稱" />
    <input type="text" name="address" id="address" placeholder="請輸入使用者名稱" />
    

    <input type="button"  onclick = "save()"  value="提交" />
    
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


<div style="border-width:3px;border-style:solid;border-color:#D3D3D3 ;padding:25px; margin:10px; border-radius:10px;" >
<div class="container" >
  <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
  </div>
</div>













  </body>
  <script>
const $menu = $('#navbarToggleExternalContent');
$menu.on('show.bs.collapse', function () {
  $menu.addClass('menu-show');
});
$menu.on('hide.bs.collapse', function () {
  $menu.removeClass('menu-show');
});
$(document).ready( function () {
    $('#example').DataTable();
} );



$(document).ready( function () {
    $('#table_id').DataTable();
} );


$('document').ready(function()
{
    $.ajax({
    type : 'POST',
    url  : 'db.php',
    dataType: 'json',
    cache: false,
    success :  function(result)
        {
            //pass data to datatable
            console.log(result); // just to see I'm getting the correct data.
            $('#table_id').DataTable({
                "searching": false, //this is disabled because I have a custom search.
                "aaData": [result], //here we get the array data from the ajax call.
                "aoColumns": [
                  { "sTitle": "inventory_id" },
                  { "sTitle": "status_id" },
                  { "sTitle": "product_id" }
                  { "sTitle": "item_id" },
                  { "sTitle": "staff_id" }
                ] //this isn't necessary unless you want modify the header
                  //names without changing it in your html code. 
                  //I find it useful tho' to setup the headers this way.
            });
        }
    });
});



function save(){
      var fun = "save"
      var VALUE = $("#UN").val() + "," + $("#PAW").val()+ "," +$("#fun").val() +  "," + fun
      
      
      
			$.ajax({
	      url:'db.php',
	      type:'post',
	      data:{"invoice":$("#invoice").val(),"product_qty":$("#product_qty").val(),"customer":$("#customer").val(), "company":$("#company").val(), "address":$("#address").val(), "function":fun },   //拼裝json陣列
	      // data:$("#fm").serialize(),   //直接從form表單中取出陣列
	      dataType:"JSON",

	    });

            
    }

</script>
</html>
