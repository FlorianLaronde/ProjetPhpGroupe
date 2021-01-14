<?php
    
    $pageUrl = isset($_GET['id']);// contient id.html

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($pageUrl)) {
        
        $id = intval($_GET['id']);
        $content = $website->page[$id-1]->content;

        $title = $website->page[$id-1]->title;
    }    
?>