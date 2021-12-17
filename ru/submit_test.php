<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
<form>
  <table>
    <tr><td>username:</td><td>
    <input type="text" name="NAME" id="NAME"/></td></tr>  
    <tr><td>
     <input type="button" value="送出" onClick="MessageGo();"/>   
     </td></tr>
  </table>
 </form>
</body>

<script>
  function MessageGo(){
//取得 "username" 欄位值
//var goods = $('#goods').val();
    document.getElementById('NAME').value  = "yoyo"  
    var goods = document.getElementById('NAME').value       
 //取得 "message" 欄位值     
                                     

  $.ajax({
      //告訴程式表單要傳送到哪裡                                         
      url:"database_test.php",                                                              
      //需要傳送的資料
      data:"&NAME="+NAME,
       //使用POST方法     
      type : "POST",                                                                    
      //接收回傳資料的格式，在這個例子中，只要是接收true就可以了
      dataType:'json', 
       //傳送失敗則跳出失敗訊息      
      error:function(){                                                                 
      //資料傳送失敗後就會執行這個function內的程式，可以在這裡寫入要執行的程式  
      alert("失敗");
      },
      //傳送成功則跳出成功訊息
      success:function(){                                                           
      //資料傳送成功後就會執行這個function內的程式，可以在這裡寫入要執行的程式  
      alert("成功");
      }
  }); 

};
                        



</script>


</html>

