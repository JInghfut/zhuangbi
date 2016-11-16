<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>最牛X的信用卡生成器</title>
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
	<img src="toutu.php?id=<?=$_GET['id']?>&name=<?=$_GET['name']?>&namea=<?=$_GET['namea']?>" width="100%"/>
</div>


<?php }else{ ?>
<header class="ui-header ui-header-positive ui-border-b">
	<h1>最牛X的信用卡生成器</h1>
</header>
<div class="wrapper"><br>
	<img src="icon.jpg" width="50%" style="margin:30px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	<div class="ui-form-item ui-border-b">
            	<label for="#">姓</label>
            	<input type="text" name="name" placeholder="输入你的姓(大写拼音)"/>
        	</div>
			<div class="ui-form-item ui-border-b">
            	<label for="#">名</label>
            	<input type="text" name="namea" placeholder="输入你的名(大写拼音)"/>
        	</div>
			<div class="ui-form-item ui-border-b">
            	<label>额度</label>
            	<div class="ui-select">
                	<select name="id">
                    	<option value ="1000000">一百万</option>
                    	<option value ="2000000">二百万</option>
						<option value ="5000000">五百万</option>
						<option value ="8000000">八百万</option>
						<option value ="10000000">一千万</option>
						<option value ="20000000">二千万</option>
						<option value ="50000000">五千万</option>
						<option value ="80000000">八千万</option>
						<option value ="100000000">一个亿</option>
                	</select>
            	</div></div>
			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-danger">确定</button>
			</div>
    	</form>
	</div>
		<?php 
} 
require_once '../foot.php';

?>
</body>
</html>