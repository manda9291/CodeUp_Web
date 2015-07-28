<?php
//function pageController(){
	//var_dump($_GET);
	$Hitters='Hit';
	$Missers='Miss';
	
	if (isset($_GET['number'])) {
	$counter= $_GET ['number'];
		if (!empty($_GET)) {
			if ($_GET ['Button'] == 'hit'){
			$counter++;
			}elseif ($_GET['Button'] == 'miss') {
			$counter=0;
			}
		}
	}else{ 
		$counter=0;
	}
	
requre_once

Input::has()
Input::get()

//extract(pageController);
//return pageController;
?>

<html>
<head>
	<title>PIIING POOOONG</title>
</head>
<body>
	<H2>Counter: <?= $counter ?> </H2>

	<a href="?Button=hit&number=<?=$counter?>">Hit</a>

	<p>
		<a href="?Button=miss&number=<?=$counter?>">Miss</a>
	</p>
</form>

</body>
</html>