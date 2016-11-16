<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>英语四六级成绩单生成器</title>
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
	<img src="toutu.php?level=<?=$_GET['level']?>&name=<?=$_GET['name']?>&school=<?=$_GET['school']?>&id=<?=$_GET['id']?>" width="100%"/>
</div>

<?php }else{ ?>

<header class="ui-header ui-header-positive ui-border-b">
	<h1>英语四六级成绩单生成器</h1>
</header>
<div class="wrapper"><br>
	<img src="icon.jpg" width="50%" style="margin:30px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	<div class="ui-form-item ui-border-b">
            	<label>科目</label>
            	<div class="ui-select">
                	<select name="level">
                    	<option value ="英语四级">英语四级</option>
                    	<option value ="英语六级">英语六级</option>
                	</select>
            	</div>
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>姓名</label>
            	<input type="text" name="name" placeholder="输入你的姓名">
        	</div>
			<div class="ui-form-item ui-border-b">
            	<label>学校</label>
            	<input type="text" name="school" placeholder="输入你的学校">
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>分数</label>
            	<div class="ui-select">
                	<select name="id">
                    	<option value ="6">满分</option>
                    	<option value ="5">学霸</option>
						<option value ="4">过线</option>
                    	<option value ="3">差点</option>
						<option value ="2">学渣</option>
                    	<option value ="1">零分</option>
                	</select>
            	</div>
        	</div><div class="ui-btn-wrap">

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