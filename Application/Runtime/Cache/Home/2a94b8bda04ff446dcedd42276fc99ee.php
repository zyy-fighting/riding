<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Riding On Load</title>

<link rel="stylesheet" type="text/css" href="Public/css/styles.css">

</head>
<body>


<div class="wrapper">

	<div class="container">
		<h1>Welcome riding admin</h1>
		<form class = "form">
			<a href="<?php echo U('User/login','','');?>" > login xing bu</a>
			
		</from>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>s
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	
</div>

<script type="text/javascript" src="Public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
$('#login-button').click(function(event){
	event.preventDefault();
	$('form').fadeOut(500);
	$('.wrapper').addClass('form-success');
	
});
</script>

</body>
</html>