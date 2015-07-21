<?php
function pageController()
{
    // Initialize an empty data array.
    $data = [];

    $data['thingsFavorite'] = ['Pizza', 'Dogs', 'Money', 'Power', 'Glory' ];

    // Return the completed data array.
    return $data;    
}

// Call the pageController function and extract all the returned array as local variables.
extract(pageController());






?>
<DOCTYPE html>
	<html>
	<head>

<link rel='stylescheet' type=''

		<title>My Fovorite Things!</title>
		<?php foreach ($thingsFavorite as $favorites): ?>
		<li>
			<?php echo $favorites; ?>
		</li>
		<? endforeach; ?>
	</head>
	<body>
	
	</body>
	</html>