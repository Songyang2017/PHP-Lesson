欢迎<?php echo $_POST["name"]?>同学<br>
您今年<?php echo $_POST["age"]?>	
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>PHP表单操作01</title>
 </head>
 <body>
 	<form action="formOperate01.php" method="post">
 		名字: <input type="text" name="name">
		年龄: <input type="text" name="age">
		<input type="submit" value="提交">
 	</form>
 </body>
 </html>