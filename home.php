<?php header('Content-type:text/html; charset=GBK'); ?>
<html>
<head>
<title>Learn PHP - Lession 1</title>
<meta name="description" content=" Learn PHP - Lession 1" />
<meta name="keywords" content="php, learn php" />
<meta name="author" content="Jackie" />
<link rel="stylesheet" href="css/style.css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- ���� Bootstrap -->
<link
	href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css"
	rel="stylesheet">
<!-- jQuery�ļ��������bootstrap.min.js ֮ǰ���� -->
<script
	src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- ���µ� Bootstrap ���� JavaScript �ļ� -->
<script
	src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h1>Lesson 1</h1>
		</div>
		<div id="main">

			<h2>ʾ�����ύ��</h2>
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

			<h2>ʾ������ʾʱ��</h2>

        <?php
        date_default_timezone_set('Asia/Shanghai');
        echo date("Y/m/d/ H:i:s");
        echo "�й���";
        echo "������" . date("Y") . "��ȵĵ�" . date("W") . "��<br/>";

        ?>
            <h2>ʾ�������ļ�</h2>
        <?php
        $file = fopen("do.php", "r") or exit("�޷��ҵ��ļ�");

        while (! feof($file)) {
            echo fgets($file) . "<br/>";
        }
        fclose($file);

        ?>


        <h2>�ϴ��ļ�</h2>

			<form role="form" action="upload.php" method="post"
				enctype="multipart/form-data">
				<div class="form-group">
					<label for="file">�ļ�����</label> <input class="form-control"
						type="file" name="file" id="file">
				</div>
				<div class="form-group">
					<input class="form-control btn btn-primary" type="submit"
						name="submit" value="�ύ">
				</div>
			</form>



		</div>
		<div id="footer"></div>


	</div>


</body>

</html>
