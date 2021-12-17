<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
<form id="fm">
	<input type="text" name="username" id="UN" placeholder="請輸入使用者名稱" />
	<input type="password" name="password" id="PAW" placeholder="請輸入密碼" />
	<input type="button" id="btn" value="確定" />
	<br />
	<p></p>
</form>
<a href="database_test.php">dfd
</body>

<script type="text/javascript">
		$(function(){
			$("#btn").click(function(){
				$.ajax({
	                url:'database1999.php',
	                type:'post',
	                data:{"username":$("#UN").val(),"password":$("#PAW").val()},   //拼裝json陣列
	                // data:$("#fm").serialize(),   //直接從form表單中取出陣列
	                dataType:"JSON",
	                success:function(msg){   
	                    if(msg) {
	                        $("p").append("賬號為：" +  msg.username + "<br />" + "密碼為：" + msg.password );
	                    }
	                    else {
	                        alert("輸入異常!");
	                    }
	                },
	                error:function(){  
	                    console.log("ERROR"); 
	                }
	            });
			});
		});
	</script>


</html>
