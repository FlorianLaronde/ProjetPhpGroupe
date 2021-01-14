<?php 
$website = simplexml_load_file('utils\source.xml');

include 'views\templates\header.php'

?>


<div class="container">



<?php 

include 'views\menu.php';
include 'controllers\controllers.php';
include 'views\templates\footer.php';

?>
