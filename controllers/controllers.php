<?php
    $website = simplexml_load_file('utils\source.xml');
    $content = '';
    $title = '';

    if (isset($_GET['id'])) {

        $pageUrl = $_GET['id'];

        if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($pageUrl)) {
            
            $id = intval($_GET['id']);
            $content = $website->page[$id-1]->content;
            $title = $website->page[$id-1]->title;
        }    
        
        
    } else {
            $content = $website->page[0]->content;
            $title = $website->page[0]->title;
    }
    
?>