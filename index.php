<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<!-- font-family: 'Lato', sans-serif; -->
</head>
<body>

<style>
*,
body { padding: 0; margin: 0; font-family: 'Lato', sans-serif; font-weight: 400; font-size: 20px;    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
         -ms-box-sizing: border-box;
            -o-box-sizing: border-box;    
                  box-sizing: border-box;   }

.smp-form { max-width: 500px; margin: 0 auto; width: 100%; padding: 20px; background:rgba(0,0,0,0.05);    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
         -ms-box-sizing: border-box;
            -o-box-sizing: border-box;    
                  box-sizing: border-box;
	 
}
.smp-form input {
	padding: 10px;
	border: 1px solid #ffffff;
	margin: 10px 0;
	width: 100%;
	font-size: 16px;
	font-family: 'Lato', sans-serif; font-weight: 700;
}
button {
	padding: 10px;
	border: 1px solid #ffffff;
	margin: 10px 0;
	width: 100%;
	font-size: 16px;
	font-family: 'Lato', sans-serif; font-weight: 700;
	background: #09C;
	color: #ffffff;
	font-size: 18px;
}
</style>
<div class="smp-form">
	<form method="post">
    	<input type="text" id="name" name="name" placeholder="Your Name" required>
        <input type="email" id="email" name="email" placeholder="Your Email" required>
        <button type="button" class="submit"> Send </button>
    </form>
</div>

<script src="minjs.js"></script>

<script>
var $=jQuery.noConflict();
/*$('.submit').click(function(){
	alert();
	$.ajax({
		type:'post',
		url:'mail.php',
		data:{'name':name,'email':email},
		dataType:'Json',
		success:function(response){
			if(response.code==1){
				alert(response.msg);
				}

		}
});
});*/
var base_url='http://172.16.0.88/projects/DATA/mail/';
$('.submit').click(function(){
var name=$('#name').val();
var email=$('#email').val();

$.ajax({
  url:base_url + "mail.php",
  type: "POST",
  data:'name=' + name + '&email=' +email,
  dataType: "Json", 
  success: function(result){
    $('#div1').html(result)
  }
});
});

</script>

</body>
</body>
</html>