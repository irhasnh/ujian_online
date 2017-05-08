<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="../style.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="../jquery/jquery-1.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#masuk").click(function(){
      
	  var username=$("#username").val();
	  var password=$("#password").val();
	  
	  
	  $.ajax({
			
			url:"proses_login.php",
			data:"username="+username+"&password="+password,
			success: function(data){
			$(".warning").html(data)
			}
			})
	});
       
   });
</script>

</head>

<body>

<div class="container">
	
    <div class="main">
    <div class="header"><center><b>-------- Admin Login --------</b></center></div>
    <div class="warning"></div>
<form id="form" method="" action="">
      <label for="textfield"></label>
      <input class="text" type="text" name="username" id="username" placeholder="username" />
      <br/>
      <label for="textfield2"></label>
      <input class="text" type="password" name="password" id="password" placeholder="password" /><br/>
      <input class="button" type="button" name="masuk" id="masuk" value="masuk" />
</form>
	<div class="footer">2015 Copyright STEKOMINDO created by pilopa</div>
	</div>
    
</div>

</body>
</html>