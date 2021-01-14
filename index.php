<?php 
$website = simplexml_load_file('utils\source.xml');
include 'controllers\controllers.php';
include 'views\templates\header.php'

?>


<div class="container">



<?php 

include 'views\menu.php';

echo $content;

include 'views\templates\footer.php';

?>
