<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

    <title>Hello, world!</title>

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

</style>
  </head>
  <body>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.6.0.slim"></script>
	
	<script src="js/jquery-3.3.1.min.js"></script>
  	<script src="js/popper.min.js"></script>

    




	<div class="pos-f-t">
  <nav class="navbar navbar-dark bg-dark">

  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-expanded="false" aria-controls="navbarToggleExternalContent" onclick = "show()">
  <span class="navbar-toggler-icon"></span>
  </button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
      <span class="navbar-toggler-icon"></span>
    </button>


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

  </body>



  <script>



const $menu = $('#navbarToggleExternalContent');




$menu.on('show.bs.collapse', function () {
  $menu.addClass('menu-show');
});

$menu.on('hide.bs.collapse', function () {
  $menu.removeClass('menu-show');
});

</script>
</html>
