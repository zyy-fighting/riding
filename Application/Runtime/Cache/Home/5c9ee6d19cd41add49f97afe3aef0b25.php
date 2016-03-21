<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>登陆界面</title>

<link rel="stylesheet" type="text/css" href="/other/riding/Public/css/styles.css">
											
</head>
<body>


<div class="wrapper">

	<div class="container">
		<h1>Welcome</h1>
		<form class="form" method = "post" action = ''>
			<input type="text" placeholder="用户名" name = "username" value = ''>
			<input type="password" placeholder="密码" name = "pwd" value = ''>
			<button type="submit" name = "submit" id="login-button" >登录</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	
</div>

<!-- <script type="text/javascript" src="/other/riding/Public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
$('#login-button').click(function(event){
	event.preventDefault();
	$('form').fadeOut(500);
	$('.wrapper').addClass('form-success');
}); -->
</script>

</body>
</html>