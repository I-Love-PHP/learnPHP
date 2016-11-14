<?php header('Content-type:text/html; charset=GBK'); ?>
<html>
<head>
<title>Learn PHP - Lession 1</title>
<meta name="description" content=" Learn PHP - Lession 1" />
<meta name="keywords" content="php, learn php" />
<meta name="author" content="Jackie" />
<link rel="stylesheet" href="css/style.css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- 引入 Bootstrap -->
<link
	href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css"
	rel="stylesheet">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script
	src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script
	src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h1>Lesson 1</h1>
		</div>
		<div id="main">

			<h2>示例：提交表单</h2>
			<form role="form" method="post" action="do.php">
				<div class="form-group">
					<label for="">Name</label><input class="form-control" name="Name"
						type="text" value="Please input your name" /> *


				</div>
				<div class="form-group">
					<label for="">Address</label><input class="form-control"
						name="Address" type="text" />
				</div>
				<div class="form-group">
					<label for="">Gender</label> <input type="radio" name="gender"
						value="Male" />Male <input type="radio" name="gender"
						value="Female" />Female
				</div>

				<button class="btn btn-default" type="submit">Submit Now</button>
			</form>

			<h2>示例：显示时间</h2>

        <?php
        date_default_timezone_set('Asia/Shanghai');
        echo date("Y/m/d/ H:i:s");
        echo "中国人";
        echo "本周是" . date("Y") . "年度的第" . date("W") . "周<br/>";

        ?>
            <h2>示例：打开文件</h2>
        <?php
        $file = fopen("do.php", "r") or exit("无法找到文件");

        while (! feof($file)) {
            echo fgets($file) . "<br/>";
        }
        fclose($file);

        ?>


        <h2>上传文件</h2>

			<form role="form" action="upload.php" method="post"
				enctype="multipart/form-data">
				<div class="form-group">
					<label for="file">文件名：</label> <input class="form-control"
						type="file" name="file" id="file">
				</div>
				<div class="form-group">
					<input class="form-control btn btn-primary" type="submit"
						name="submit" value="提交">
				</div>
			</form>



		</div>
		<div id="footer"></div>


	</div>


</body>

</html>
