<?php

//require_once the Auth.php and Input.php files.
require_once'../Auth.php';
require_once'../input.php';

session_start();
$sessionId = session_id();




var_dump($sessionId);
?>
<html>
<head>
	<title>Your page</title>
</head>
<body>
<h2>You got in!</h2>
</body>
</html>