<?php

    // on parse le fichier xml
    $website = simplexml_load_file('utils\source.xml');

    //initialisation des variables
    $content = '';
    $title = '';

    // !!! Ne pas oublier de nettoyer 


    // on teste si l'attribut id existe grâce à la variable super globale qui collecte les données
    if (isset($_GET['id'])) {

        // si il existe, on le stocke dans une variable
        $pageUrl = $_GET['id'];

        // on teste si on a cliqué sur un lien dans le menu avec la méthode GET
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($pageUrl)) {
            
            // si oui
            // on convertit l'id en entier pour pouvoir l'utiliser pour naviguer dans le menu
            $id = intval($_GET['id']);

            // on stocke dans une variable le contenu de la page demandée
            // ainsi que le titre de la page
            $content = $website->page[$id-1]->content;
            $title = $website->page[$id-1]->title;
        }    
        
        // la methode GET n'a pas été utilisée
        // on affiche page Accueil par défaut (index 0))
    } else {
            $content = $website->page[0]->content;
            $title = $website->page[0]->title;
    }
    
?>