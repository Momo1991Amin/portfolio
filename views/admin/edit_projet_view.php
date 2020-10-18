<?php include_once "header_view.php" ?>

<main class="container">
    <?php if(!empty($alert) || !empty($sucess)): ?>
        <?php if(!empty($alert)): ?>
            <div class="alert">
                <p><?= $alert; ?></p>
            </div>
        <?php else: ?>
            <div class="sucess">
                <p><?= $sucess; ?></p>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <section id="presentation">
        <div class="presentation-image">
            <div class="presentation-objective">
                <form method="POST" action="" enctype="multipart/form-data">

                    <div class="input-fields">
                        <label for="name">Titre</label>
                        <input type="text" name="titre" required value="<?= $pro->getTitre() ?>">
                    </div>

                    <div class="input-fields">
                        <label for="description">Description</label>
                        <input type="text" name="description" required value="<?= $pro->getDescription() ?>">
                    </div>

                    <div class="input-fields">
                        <label for="name">Web site</label>
                        <input type="text" name="lienSite" required value="<?= $pro->getLienSite() ?>">
                    </div>

                    <div class="input-fields">
                        <h3>Image :</h3>
                        <img src="assets/images/upload/<?= $pro->getMaquette() ?>" class="img-miniatures">
                        <label for="image">Changer l'image </label>
                        <input type="file" name="image" id="image">
                    </div>

                    <div class="presentation-btn">
                        <button  type="submit" name="edit_projet">Modifier le projet</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php include_once "footer_view.php"; ?>
