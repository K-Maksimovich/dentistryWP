
<?php
include_once "database/db.php"; global $connect_db;?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentistry 14</title>
    <?php wp_head(); ?>
</head>
<body>
<!--В классе container находится весь наш контент -->

<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" id="nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Dentistry 14</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php
            wp_nav_menu( [
                'theme_location' => 'header',
                'menu' => '',
                'container' => false,
                'menu_class' => 'navbar-nav',
                'menu_id' => true,
                'echo' => true,
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 1,
                'walker' => new Bootstrap_Walker_Nav_Menu(),
            ] );
            ?>

<!--            --><?php
//            $query = "SELECT * FROM `users`";
//            $user = mysqli_query($connect_db, $query);
//            $user = mysqli_fetch_array($user);
//
//            if ($user['group_user'] >= 1){
//                ?>
<!--                -->
<!--            --><?php
//            }
//            ?>

            <div class="about">
                <a href="http://dentistry-wp/register/" class="reg">Register</a>
                <a href="http://dentistry-wp/login/" class="log">Login</a>
            </div>
            <div class="about">
                <a href="http://dentistry-wp/profile/">profile</a>
            </div>



        </div>

    </div>
</nav>




