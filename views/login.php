<?php ob_start() ?>
<title>Se connecter</title>
<meta name="description" content="Je suis un développeur Web autodidacte intéressé par l'informatique en termes de programmation et de sécurité. J'ai étudié les concepts et l'ingénierie de base de la programmation, et j'ai de l'expérience dans le développement Front-End en utilisant HTML5, CSS3, JavaScript, JavaScript orienté objet, Bootstrap4, jQuery, Git et GitHub. J'étudie et me forme actuellement sur les technologies Angular, PHP, SQL et back-end, dans un but de développement et pour devenir un Développeur Web Full-Stack! Mes plus grandes forces dans ce domaine sont le dépannage et la résolution de problèmes, et l'auto-apprentissage continu.J'ai également des connaissances de base en langage Java, dans l'environnement Android.">
<meta name="keywords" content="Administrateur Devops">
<?php $css = ob_get_clean() ?>

<?php ob_start() ?>

<section id="login">

    <?php if (!is_null($message)) : ?>
        <p><?= $message ?></p>
    <?php endif ?>
    <!--login section-->
    <div class="title">
        <div class="title-text">
            <h2>Se connecter pour acceder à la partie </h2>
            <h2>admin</h2>
        </div>
        <div class="title-underline">
        </div>
    </div>
    <div class="login-form">
        <div class="input-fields">
            <form class="form_login" id="form_login" action="" method="post">
                <div class="form-group">
                    <label for="email">E-mail </label>
                    <input type="email" name="email" id="email" class="input" placeholder="Votre adresse e-mail">
                    <span class="error" id="errorEmail"></span>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe </label>
                    <input type="password" name="password" id="password" class="input" placeholder="Votre mot de passe">
                    <span class="error" id="errorPassword"></span>
                </div>
                <div class="login-btn">
                    <button type="submit" class="button">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!--end of section-->

<?php $content = ob_get_clean() ?>
<?php ob_start() ?>

<script src="assets/js/login.js"></script>

<?php $javascript = ob_get_clean() ?>

<?php include_once "layout.php" ?>

