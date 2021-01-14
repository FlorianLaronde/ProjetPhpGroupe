<a class="nav-link" href="?id=1.html">Accueil</a>
<a class="nav-link" href="?id=name">Accueil</a>
<?php

$tab = ['Thierry', 'Kevin'];

// echo $_GET[];

echo $tab[$_GET['id']];

// faire correspondre le clés et les index
// ajouter? 1 à l'index