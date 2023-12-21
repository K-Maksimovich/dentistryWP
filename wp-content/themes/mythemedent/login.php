<?php /* Template Name: страница Login */ ?>
<?php session_start(); ?>

<?php get_header(); ?>

    <div class="container">

        <form action="register_req.php" method="post" class="w-75">
            <h1 class="mt-4">Login</h1>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Адресс почты</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary px-4">Submit</button>

            <?php
            if ($_SESSION['message-d']){
                echo '<div class="alert alert-danger m-2" role="alert"> ' . $_SESSION['message-d'] . ' </div>';
            }

            unset($_SESSION['message-d']);

            ?>
        </form>
        <p class="text-muted w-50 blockquote mx-auto"> У вас ещё нет аккаунта? <a href="http://dentistry-wp/register/"> Зарегестрироваться </a></p>

    </div>


<?php get_footer(); ?>