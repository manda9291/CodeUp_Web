<?php


function pageController()
{
    $adjectivess= ['Small', 'Smart', 'Big-O-', 'Unique', 'Fast', 'Clean', 'Cool', 'Cold', 'Mysterious', 'scary' ];
    $nouns = ['Dog', 'Jane', 'Baby', 'Car', 'Fly', 'Tree', 'Kitties', 'Ant', 'Taco', 'Pizza' ];
    // Initialize an empty data array.
    $data = [];

    // Add data to be used in the html view.
    // Return the completed data array.
    $data['severName']= random($adjectives) . " " . random($nouns);
    return $data;    
}

// Call the pageController function and extract all the returned array as local variables.
extract(pageController());







function random($array){
	$randomVariable = mt_rand(0, count($array)-1);
	return $array[$randomVariable];
}

//$pairingNounAdj = random($adjectives) . " " . random($nouns);

?>
<!DOCTYPE html>
<html>
<head>
	<title> File Name Generator!</title>
</head>
<body>
<h1><?= $adjectivess ?></h1>


</body>
</html>