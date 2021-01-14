<?php
    
    $pageUrl = $_GET['id'];// contient id.html

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($pageUrl)) {
        
        $id = intval($_GET['id']);
        echo $website->page[($id-1)]->content;
    }
?>