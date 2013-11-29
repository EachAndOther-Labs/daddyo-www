<html>
<head>

</head>
<body>
<?php
//header('Content-Type: application/json; Charset=UTF-8');

$string = file_get_contents("content.json");
$json = json_decode($string,true);

foreach ($json as $category) {
	# code...
	//echo('<a href="'.$category['title'].'.html">'.$category['title'].'</a><br/>');
    echo('<a href="index.php?title='.$category['title'].'">'.$category['title'].'</a><br/>');
	
}

//print_r($json);

?>

</body>
</html>

