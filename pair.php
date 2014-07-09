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

<script>
var all =[];
<?php
$db = new SQLite3('db/dba.db');
$count = $db->query('select max(class) from people')->fetchArray()[0];
for ($i = 1; $i <= $count; $i++) {
	echo "var t = [];\n";
	$str = "";
	$stmt = $db->prepare('select name from people where class=:count order by random()');
	$stmt->bindValue(':count', $i, SQLITE3_INTEGER);
	$result = $stmt->execute();
	$odd = 0;
	while($row = $result->fetchArray()) {
		$odd++;
		if ($odd %2 != 0) {
			$str .= "$row[0] : ";
			echo "$str\n";
		}
		else {
			$str .=$row[0];
			echo "t.push('$str');\n";
			$str="";
		}
	}
	if ($odd %2 !=0)
		echo "t.push('$str 솔로');\n";
	echo "all.push(t);\n";
}
?>

</script>

<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
	  <div class="container">
		<h1>Database Advanced</h1>
		<p>2014년도 2학기 데이터베이스 어드밴스드 수업 페이지</p>
		<!--<p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p> -->
	  </div>
	</div>

	<div class="container">
	  <div class="row">
		<div class="col-sm-6">
			<div class="panel panel-primary"> 
				<div class="panel panel-heading">
				<h3 class="panel-title"> 오늘의 짝을 골라봅시다. </h3>
				</div>
				<div class="panel-body">
					<div class="btn-group"> 
<?php
for($i = 1; $i <= $count; $i++) {
	echo "<button type='button' id='btn$i' class='btn btn-default'> $i 반";
	echo "</button>\n";
}
?>
					</div>
					<button onclick="funcPair()" class="btn btn-sm btn-success">GO
						<span class="glyphicon glyphicon-pencil"></span>
					</button>
				</div>
		</div>
	</div>
	</div>
	</div>

	<div class="container">
		<div class = "row">
			<div class = "col-sm-6">
				<div class="panel panel-primary"> 
					<div class="panel panel-heading">
						<h3 class="panel-title"> 오늘의 짝</h3>
					</div>
					<div class="panel-body">
						<p id="result"> 결과 </p>
					</div>
				</div>
			</div>
		</div>
	</div>

<script>
var numClass = 1;
var text = document.getElementById("result");
<?php
for ($i = 1; $i <= $count; $i++) {
	echo "$('#btn$i').click(function() { numClass = $i; });\n";
}
?>

function funcPair() {
	//text.innerHTML = all[numClass -1];
	var list = all[numClass -1];
	var result = "<div class='table table-striped'>\n"
				+"<table class='table table-striped'>\n"
	result += "<tbody>\n";
	
	for(var i in list) {
		result += "<tr><td>" + list[i] + "</td></tr>\n";
	}
	result += "</tbody></table><div>\n";
	text.innerHTML = result;
}

</script>
	  <hr>
	  <footer>
		<p>&copy; Honux 2014 </p>
	  </footer> </div> <!-- /container -->
</body></html>
