<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>楼宇表白生成器</title>
<link type="text/css" rel="stylesheet" href="../css/frozen.css" />
<style>
.ui-header-positive, .ui-footer-positive {
background-color: #f05557;
color: #fff;
}
a {
color: #f05557;
}
</style>
</head>
<body ontouchstart="">
<?php if($_GET['name']){?>
	<header class="ui-header ui-header-positive ui-border-b">
	<h1>长按下方图片点选保存图片</h1>
</header>
<div class="wrapper"><br><br>
	<img src="toutu.php?name=<?=$_GET['name']?>&id=<?=$_GET['id']?>&" width="100%"/>
</div>

<?php }else{ ?>
<header class="ui-header ui-header-positive ui-border-b">
	<h1>楼宇表白生成器</h1>
</header>
<div class="wrapper"><br>
	<img src="icon.jpg" width="50%" style="margin:30px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	<div class="ui-form-item ui-border-b">
            	<label for="#">姓名</label>
            	<input type="text" name="name" placeholder="输入你的姓名"/>
        	</div>
			<div class="ui-form-item ui-border-b">
            	<label>内容</label>
            	<div class="ui-select">
                	<select name="id">
                    	<option value ="1">嫁给我吧</option>
                    	<option value ="2">来娶我吧</option>
						<option value ="3">我爱你</option>
						<option value ="4">我喜欢你</option>
                	</select>
            	</div>
        	</div>
			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-primary">确定</button>
			</div>
    	</form>
	</div>
	<div style="padding:20px 15px; height:110px;"><a class="ui-btn-lg ui-btn-danger" href="http://test.dede168.com/" target="_blank">此处为广告位，更多源码>></a></div>
</div>
<?php 
} 
require_once '../foot.php';

?>
</body>
</html>