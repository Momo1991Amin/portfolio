<?php include_once "header_view.php" ?>

<main class="container">
    <!-- Message erreur -->
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
                        <input type="text" name="titre" id="titre" required>
                    </div>

                    <div class="input-fields">
                        <label for="name">Description</label>
                        <input type="text" name="description" id="description" required>
                    </div>

                    <div class="input-fields">
                        <label for="name">website</label>
                        <input type="text" name="lienSite" id="lienSite" required>
                    </div>

                    <div class="input-fields">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" required>
                    </div>

                    <div class="presentation-btn">
                        <button  type="submit" name="submit_projet">Ajouter le projet</button></a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php include_once "footer_view.php"; ?>

