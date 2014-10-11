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
			<li class="active"><a href="#learnt">Learn</a></li>
			<li><a href="#contact">Donate</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
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


<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
	  <div class="container">
		<h1>Database Advanced</h1>
		<p>2014년도 2학기 데이터베이스 어드밴스드 수업 페이지</p>
		<!--<p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p> -->
	  </div>
	</div>

	<div class="container">
	  <!-- Example row of columns -->
	  <div class="row">
		<div class="col-lg-4">
		  <h2>Pair Programming</h2>
		  <p>오늘의 짝을 골라봅시다. <p>
		  <p><a class="btn btn-info" href="pair.php">Go &raquo;</a></p>
		</div>
		<div class="col-lg-4">
		  <h2>Next Cafe </h2>
		  <p>넥스트 카페 바로가기 </p>
		  <p><a class="btn btn-info" href="http://cafe.nhnnext.org/dba142">Go &raquo;</a></p>
	   </div>
	  </div>

	  <hr>

	  <footer>
		<p>&copy; Honux 2014 </p>
	  </footer> </div> <!-- /container -->
</body></html>
