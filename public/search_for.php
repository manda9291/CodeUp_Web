<?php

$word = isset($_POST['word']) ? $_POST['word']: " ";

$guess= urlencode("$word")
?>

<html>
<head>
	<title>Search For</title>
</head>
<body>
	<h2>Search for<?=$guess?></h2>
	<form method="POST">
		<?php echo htmlspecialchars(strip_tags($word)); ?>
		<input type="text" placeholder="find" name="word"><br>
		<input type="submit">
	</form>
	<a href="https://duckduckgo.com/?q=<?= $guess ?>"> Search Now!</a>


</body>
</html>