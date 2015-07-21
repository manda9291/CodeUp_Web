<?php
	var_dump($_GET);
	$Uppers='Up';
	$Downers='Down';
	
	if (isset($_GET['number'])) {
	$counter= $_GET ['number'];
		if (!empty($_GET)) {
			if ($_GET ['Button'] == 'up'){
			$counter++;
			}elseif ($_GET['Button'] == 'down') {
			$counter--;
			}
		}
	}else{ 
		$counter=0;
	}

?>

<html>
<head>
	<title>GET Requests</title>
</head>
<body>
	<H2>Counter: <?= $counter ?> </H2>

	<a href="?Button=up&number=<?=$counter?>">Up</a>

	<p>
		<a href="?Button=down&number=<?=$counter?>">Down</a>
	</p>
</form>

</body>
</html>