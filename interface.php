<?php


 ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type=text/html;charset=utf-8"/>
    <!-- jQuery -->
    <script type="text/javascript" src="http://code.changer.hk/jquery/1.11.2/jquery.min.js"></script>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <title>網頁標題</title>
  
  <link rel="stylesheet" href="style.css">
 <style>
  nav > ul 
  {
    background-color: rgb(230, 230, 230);
    list-style: none;   /* 移除項目符號 */
    margin: 0;
    padding: 0;
  }
  nav a 
  {
    color: inherit; /* 移除超連結顏色 */
    display: block;
    font-size: 1.2rem;
    padding: 10px;
    text-decoration: none;  /* 移除超連結底線 */
  }

  nav li:hover 
  {
    background-color: rgb(115, 115, 115);
    color: white;
  }

  .float-nav {
    float: left;

  }

  .float-nav-outer {
    background-color: rgb(230, 230, 230);
    overflow: auto;
  }
</style>
</head>


<body>

<div class = "wu">
    <nav class="float-nav-outer" >
     <ul >
        <li class="float-nav"><a id="listBtn" onclick="listBtn()" href="#">庫存</a></li>
        <li class="float-nav"><a href="#">盤點</a></li>
        <li class="float-nav"><a href="#">報表</a></li>

     </ul>
    </nav>
  </div>
  
  <!-- 這裡是 HTML 語法的 主要資料區 -->


  

<div id = "textlistn" style="display:none;" >
  <button type="button">創建</button>
      <div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td>編號</td>
                    <td>名稱</td>
                    <td>價錢</td>
                    <td>數量</td>
                   
                </tr>
            </thead>
            <tbody id="tbody"></tbody>
        </table>
      </div>
</div>



</body>

<script>
function listBtn() {
  var listBtn = document.getElementById('listBtn');
  var textlistn = document.getElementById('textlistn');
  if (textlistn.style.display === 'none') {
    textlistn.style.display = 'block';
    //listBtn.innerText = "隱藏";
  } else {
    textlistn.style.display = 'none';
    //listBtn.innerText = "秀出來";
  }
}
</script>


<script type="text/javascript">

$.ajax({
    type: 'POST',
    url: 'database.php',
    data:{
    },
    success: function (data) {
        //console.log(data);
        var a = data.split(' ');
        //console.log(a);
        var trStr = '';//動態拼接table
        for (var i = 0; i < a.length-1; i++) {
            trStr += '<tr class="example">';
            trStr += '<td width="15%">' + JSON.parse(a[i]).goods_ID + '</td>';
            trStr += '<td width="15%">' + JSON.parse(a[i]).name + '</td>';
            trStr += '<td width="15%">' + JSON.parse(a[i]).cost + '</td>';
            trStr += '<td>' + JSON.parse(a[i]).quantity + '</td>';
           
            trStr += '</tr>';  
        } 
        $("#tbody").html(trStr);
    }
});
</script>
</html>

