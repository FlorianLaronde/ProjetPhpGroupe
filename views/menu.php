<!-- Navbar -->
<nav id="navbar" class="fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">

            <!-- On boucle sur le tableau $website afvec la propriété page
            pour affucher chaque élément du menu -->
            <?php foreach($website->page as $key): ?>

                <li class="nav-item active">
                    <!-- le href contient l'id de la page + l'extension .html 
                    pour la redirection d'url (.htaccess)
                    et on affiche l'élément de menu -->
                    <a class="nav-link" href="<?=$key['id']?>.html"><?=$key->menu?></a>
                </li>

            <?php endforeach ?>

        </ul>
    </div>
</nav>
