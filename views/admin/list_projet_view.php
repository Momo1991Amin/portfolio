<?php include_once "header_view.php" ?>
    <main class="container">
        <div id="presentation">
            <div class="presentation-image">

                <p class="presentation-objective">
                    ici c'est la Liste  des Projets, vous pouvez Ajouter des Projets en cliquant ici:
                </p>
                <div class="presentation-btn">
                    <a href="index.php?class=projet&action=newprojet"><button type="button">Ajouter un projet</button></a>
                </div>

                <div class="responsiveTable">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Titre </th>
                            <th>Description </th>
                            <th>Lien du site</th>
                            <th  colspan="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($all_projets as $projet) : ?>
                            <tr>
                                <td><img src="assets/images/upload/<?= $projet->getMaquette(); ?>"></td>
                                <td><?= $projet->getTitre(); ?></td>
                                <td><?= $projet->getDescription(); ?></td>
                                <td><?= $projet->getLienSite(); ?></td>
                                <td> <a href="index.php?class=projet&action=editprojet&id=<?= $projet->getId(); ?>">Modifier</a></td>
                                <td width=10%>
                                    <a href="index.php?class=projet&action=delete&id=<?= $projet->getId(); ?>" onclick="return confirm('êtes vous sûr de bien vouloir supprimer ?');">&nbsp;Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php include_once "footer_view.php"; ?>