<?php

$website = simplexml_load_file('utils\source.xml');

// $menu = $website->page[1]->menu;
$title =  $website->page[1]->title;
$content = $website->page[1]->content;

$pages = $website->page;


// foreach ($pages as $page) {
//     $id = $page['id'];
//     $title = $page->title;
//     $menuItem = $page->menu;
//     $content = $page->content;
//     print_r($title);
// }

function array_push_assoc($array, $key, $value) {
    $array[$key] = $value;
    return $array;
}

function displayNavbar($pages) {

    $menu = [];
    
    foreach ($pages as $page) {
        $menuItem = $page->menu;
        $id = $page->page['id'];
        $menu = array_push_assoc($menu, $id, $menuItem);
    }

    return $menu;
}
var_dump(displayNavbar($pages));
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title><?=$title?></title>
</head>

<body>

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php foreach (displayNavbar($pages) as $url => $menuItem): ?> 
                        <li class="nav-item active">
                            <a class="nav-link" href="<?=$url?>"><?=$menuItem?></a>
                        </li>
                    <?php endforeach ?>
                    
                </ul>
            </div>
        </nav>

        <div class="content">
            <?=$content?>
        </div>
    </div>

</body>
</html>