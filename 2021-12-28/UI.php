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

  <duv class="bg-dark collapse position-fixed" id="navbarToggleExternalContent">
  <div  >
    <!-- https://stackoverflow.com/a/10055302/9265131 -->
 
	  <nav>
    <ul>
        <li><a href="#">電子商務</a></li>
        <li><a href="#">市場行銷</a></li>
        <li><a href="#">辦公室生產力</a></li>
        <li><a href="#">個人成長</a></li>
        <li><a href="#">設計</a></li>
        <li><a href="#">通訊工程與軟體</a></li>
    </ul>
</nav>
  </div>



</div>



  <div class="bg-info p-4">I am a content. I would be covered when the toggler click.</div>

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




<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-bs-target
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>


<script>

$(document).ready( function () {
    $('#table_id').DataTable();
} );


</script>



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


</script>
</html>
