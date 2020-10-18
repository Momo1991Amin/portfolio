<?php include_once "header_view.php" ?>

<main class="container">
    <section id="presentation">
        <div class="presentation-image">
            <p class="presentation-objective">    
            Bienvenue dans la page <span> Accueil Admin</span> ici c'est l'administration des Projets , sélectionnez une rubrique ci-dessus. , vous pouvez Voir , Modifier , Ajouter ou Supprimer les Projets en cliquant ici:</p>
            <div class="presentation-btn">
                <a href="index.php?class=projet&action=allprojets"><button type="button">Lister des projets</button></a>
                        <a href="index.php?class=projet&action=newprojet"><button type="button">Ajouter un projet</button></a>
            </div>
        </div>
    </section>
</main>
<?php include_once "footer_view.php"; ?>
