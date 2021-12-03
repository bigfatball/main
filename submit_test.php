<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


<body>

<div>
<input id = "NAME" type="text" >
<button type="button" id = "SUBMIT">submit</button>
<button type="button" id = "TEST">test</button>
<p>This is a paragraph.</p>

</div>

</body>

<script>
    $(document).ready(function(){
        $("#SUBMIT").on("click", function(){
            $ajax({
                type:"POST",
                dataType:"Json",
                contentType:"application/Json;charset=utf-8",
                url:"database_test.php"
                data: JSON.stringift({
                    NAME:$('#NAME').val()
                }),
            });
           
        })
    });

    


</script>


<script>
    $(document).ready(function(){
        $("#TEST").click(function(){
            $("p").slideToggle();

    });
});
    


</script>

</html>

