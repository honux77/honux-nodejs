<?php
$db = new SQLite3('db/dba.db');
$count = $db->query('select max(class) from people')->fetchArray()[0];
for ($i = 1; $i <= $count; $i++) {
	echo "$i 반<p>\n";
	$stmt = $db->prepare('select name from people where class=:count order by random()');
	$stmt->bindValue(':count', $i, SQLITE3_INTEGER);
	$result = $stmt->execute();
	$odd = 0;
	while($row = $result->fetchArray()) {
		$odd = $odd +1;
		echo "$row[0]";
		if ($odd %2 != 0) 
			echo " : ";
		else
			echo " <br>\n";
	}
	if ($odd %2 !=0)
		echo "솔로 <br>\n";
	echo "<p>\n";
}
?>
