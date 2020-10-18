<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"/>
    <!-- Main Css -->
    <link rel="stylesheet" href="assets/css/main.css"/>
    <?php if(isset($css)) : ?>
        <?= $css ?>
    <?php endif; ?>
</head>

<body>
<header>
    <!--navbar-->
    <nav>
        <ul id="nav">
            <li>
                <a href="#" class="logo">Mohamed El Amin.<span>Bensersa</span><i id="fa-button" class="fas fa-bars"></i></a>
            </li>
            <li>
                <div id="nav-items" class="nav-items-hide">
                    <ul class="tht">
                    <li class="nav-item"></i><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li class="nav-item"><a href="index.php?class=user&action=login"><i class="fa fa-user-shield"></i>Admin</a></li>
                        <li class="nav-item"><a href="index.php?#compétences"><i class="fa fa-user-graduate"></i>compétences</a></li>
                        <li class="nav-item"><a href="index.php?#services"><i class="fa fa-briefcase"></i>Service</a></li>
                        <li class="nav-item"><a href="index.php?#projets"><i class="fa fa-folder-open"></i>Projets</a></li>
                        <li class="nav-item"><a href="index.php?class=contact&action=addcontact"><i class="fa fa-envelope"></i>Contact</a></li>
                        <li class="nav-item"><a href="https://drive.google.com/file/d/1vttvWD6w3T3-XYX3in77hSMK8sJ9Mh6b/view?usp=sharing"><i class="fa fa-download"></i>CV</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
    <!--end of navbar-->
</header>


<main>
    <?= $content ?>
</main>
<?php if(isset($javascript)) : ?>
    <?= $javascript ?>
<?php endif; ?>

