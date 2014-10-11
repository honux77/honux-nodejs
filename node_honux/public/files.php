<!DOCTYPE html>
<html lang="ko">
<head>
<title>Welcome to Honux School</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<!-- 부트스트랩 -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/jumbotron.css" rel="stylesheet">

</head>
<body>
<!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요한) -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- 모든 합쳐진 플러그인을 포함하거나 (아래) 필요한 각각의 파일들을 포함하세요 -->
<script src="js/bootstrap.min.js"></script>

<!-- Respond.js 으로 IE8 에서 반응형 기능을 활성화하세요 (https://github.com/scottjehl/Respond) -->
<script src="js/respond.js"></script>
	<div class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		<div class="navbar-collapse collapse">
		  <ul class="nav navbar-nav">
			  <li><a href="index.html">Home</a></li> 
			<li><a href="#about">Learn</a></li>
			<li><a href="#contact">Donate</a></li>
			<li class="dropdown">
			  <a href="#" class="active dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="files.php">Downloads</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li class="dropdown-header">Nav header</li>
				<li><a href="#">Separated link</a></li>
				<li><a href="#">One more separated link</a></li>
			  </ul>
			</li>
		  </ul>
		  <form class="navbar-form navbar-right">
			<div class="form-group">
			  <input type="text" placeholder="Admin ID" class="form-control">
			</div>
			<div class="form-group">
			  <input type="password" placeholder="Password" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Sign in</button>
		  </form>
		</div><!--/.navbar-collapse -->
	  </div>
	</div>

	<p>

<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
	  <div class="container">
		<h1>Downloads Page</h1>
		<p> 강의에 필요한 파일들을 다운받으세요. </p>
	  </div>
	</div>
	<div class="row">
		<div class="col-sm-5">
			<div class="panel panel-primary"> 
				<div class="panel-heading">
					<h3 class="panel-title"> File list</h3>
				</div>
				<div class="panel-body">
				<?php
				$dir = 'myfiles';
				$files = scandir($dir);
				foreach ($files as $file) {
					if ($file == "." || $file == "..")
						continue;
					echo "<a href='$dir/$file'>$file</a><br>";
				}
				?>
				</div>
			</div>
		</div>
	</div>

	<!-- END OF CONTENTS -->
	  <footer>
		<p>&copy; Honux 2014 </p>
	  </footer> </div> <!-- /container -->
</body></html>
