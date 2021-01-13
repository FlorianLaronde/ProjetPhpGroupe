<?php

$website = simplexml_load_file('utils\source.xml');

// $menu = $website->page[1]->menu;
// $title =  $website->page[1]->title;
// $content = $website->page[1]->content;

$pages = $website->page;


foreach ($pages as $page) {
    $id = $page['id'];
    $title = $page->title;
    $menuItem = $page->menu;
    $content = $page->content;
    
    switch ($id) {
        case '1':
            echo $menuItem.$content;
            break;
        case '2':
            echo $menuItem.$content;
            break;
        case '3':
            echo $menuItem.$content;
            break;
        case '4':
            echo $menuItem.$content; 
            break;
}
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title></title>
</head>
<body>
    
<div class="container">

<?php //include 'views\menu.php'; ?>



</div>

</body>
</html>