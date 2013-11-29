<?php
ob_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

if($_GET['title']) {
    $currentTitle = $_GET['title'];
}

$string = file_get_contents("content.json");
$json = json_decode($string,true);

foreach ($json as $category) {
	# code...
    if($category['title'] == $currentTitle) {
        echo('<div class="'.$category['category'].'"><h1>'.$category['title'].'</h1>');
    $section = $category['sections'];
    foreach ($section as $item) {
        # code...
        if($item['type'] == 'normal') {
            echo '<div class="normal">'.$item['content'].'</div>';
        }
        if($item['type'] == 'generic') {
            echo '<div class="normal">'.$item['content'].'</div>';
        }
        if($item['type'] == 'tip') {
            echo '<div class="tip"><h1>PRO TIP</h1><p>'.$item['content'].'</p></div>';
        }
        if(($item['type'] == 'yes-list') || ($item['type'] == 'no-list') || ($item['type'] == 'warning-list')) {
            echo '<div class="'.$item['type'].'"><h1>'.$item['title'].'</h1><ul>';
            $bullets = $item['bullets'];
            foreach ($bullets as $bullet) {
                # code...

                echo '<p>'.$bullet['heading'].'</p><li>'.$bullet['content'].'</li>';
            }
            echo '</ul></div>';
        }
        //print_r($item);
    }

    echo '</div>';
    }
	

}

//print_r($json);

?>

</body>
</html>

