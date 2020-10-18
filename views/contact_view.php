<?php ob_start() ?>
<title>Contact</title>
<?php $css = ob_get_clean() ?>
<?php ob_start() ?>

<section id="contact">
    <div class="title">
        <div class="title-text">
            <h2>Contact</h2>
        </div>
        <div class="title-underline"></div>
    </div>

    <?php if (!is_null($message)) : ?>
        <p><?= $message ?></p>
    <?php endif ?>

    <div class="contact-form">
        <form id="form" action="" method="post">
            <div class="input-fields">
                <label>
                    <input type="text" name="firstname" class="input" id="firstName" placeholder="Prénom">
                    <span class="error" id="errorFirstName"></span>
                </label>
            </div>
            <div class="input-fields">
                <label>
                    <input type="text" name="name" class="input" id="name" placeholder="Nom">
                    <span class="error" id="errorName"></span>
                </label>
            </div>
            <div class="input-fields">
                <label>
                    <input type="email" name="mail" class="input" id="email" placeholder="Email">
                    <span class="error" id="errorEmail"></span>
                </label>
            </div>
            <div class="msg">
                <label>
                    <textarea name="message" id="message" placeholder="Message"></textarea>
                    <span class="error" id="errorMsg"></span>
                </label>
            </div>
            <div class="btn-contact">
                <input type="submit" value="ENVOYEZ" name="btnContact">
            </div>
        </form>
    </div>
</section>

<?php $content = ob_get_clean() ?>
<?php ob_start() ?>
<script src="assets/js/validation.js"></script>
<?php $javascript = ob_get_clean() ?>
<?php include_once "layout.php" ?>

