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
  <button type="button" id = "restock" onclick = "show_restock()">入貨</button>
  <button type="button" id = "shipment">出貨</button>
  <button type="button" id = "control">hold貨</button>
      <div id = "goodstable">
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
      <div id = "restock_form" style="display:none;">
      <form id="fm">
	      <input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
	      <input type="password" name="password" id="PAW" placeholder="請輸入密碼" />
	      <input type="test" name="function" id="fun" placeholder="請輸入函數" value = "in" />
	      <input type="button" id="resuock_form_sub" value="確定" onclick = "save()" />
	      <br />
	      <p></p>
      </form>
      </div>
</div>

  
<input type="text" name="log_clcik" id="LOG" placeholder="請輸入使用者名稱" value  = "click" />



</body>

<!-- 存入 -->
<script type="text/javascript">
		function save(){
      var dd = "dfda"
      var VALUE = $("#UN").val() + "," + $("#PAW").val()+ "," +$("#fun").val() +  "," + dd
      
      log("click","button resuock_form_sub click","null", "User action")
      
			$.ajax({
	      url:'database.php',
	      type:'post',
	      data:{"username":$("#UN").val(),"password":$("#PAW").val(),"function":$("#fun").val(), "cost":dd },   //拼裝json陣列
	      // data:$("#fm").serialize(),   //直接從form表單中取出陣列
	      dataType:"JSON",
	      success:function(data){   
          alert("成功!")
                    
	        if(data) {
	          $("p").append("賬號為：" +  msg.username + "<br />" + "密碼為：" + msg.password + "函數為:" + msg.function );
	        }
	        else {
	          alert("輸入異常!");
	        }
	      },
	      error:function(data){  
	        console.log("ERROR"); 
	        }
	    });

            
    }

  
//貨存顯示

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

//入貨顯示
function show_restock(){
        
        var goodstable = document.getElementById('goodstable');
        if (goodstable.style.display === 'none') {
          goodstable.style.display = 'block';
          restock_form.style.display = 'none';
    //listBtn.innerText = "隱藏";
        } else {
          goodstable.style.display = 'none';
          restock_form.style.display = 'block';
    //listBtn.innerText = "秀出來";
        }
      }

    //show 貨存表
    $.ajax({
    type: 'POST',
    url: 'database.php',
    data:{
    },
    success: function (data) {
      
        var a = data.split(' ');
        //console.log(a);

        //console.log(a);
        var trStr = '';//動態拼接table
        for (var i = 0; i < a.length-1; i++) {
            trStr += '<tr class="example">';
            trStr += '<td width="15%">' + JSON.parse(a[i]).good_ID + '</td>';
            trStr += '<td width="15%">' + JSON.parse(a[i]).name + '</td>';
            trStr += '<td width="15%">' + JSON.parse(a[i]).cost + '</td>';
            trStr += '<td>' + JSON.parse(a[i]).quantity + '</td>';
           
            trStr += '</tr>';  
        } 
        $("#tbody").html(trStr);
    }
});

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

	</script>





</html>
