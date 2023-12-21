<?php /* Template Name: страница Register */ ?>
<?php session_start(); ?>

<?php get_header(); ?>

<div class="container">

    <form action="http://dentistry-wp/register_req/" method="post" class="w-75">
        <h1 class="mt-4">Register</h1>
        <div class="mb-3 mt-4">
            <label for="exampleInputEmail1" class="form-label">Имя Фамилия</label>
            <input type="text" name="full_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Адресс почты</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" aria-describedby="passlHelp">
            <div id="passlHelp" class="form-text">Будьте внимательны при создании пароля, не забудтье его!</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Дата рождения</label>
            <input type="date" name="date_o_b" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary px-4">Submit</button>

        <?php
        if ($_SESSION['message-d']){
            echo '<div class="alert alert-danger m-2" role="alert"> ' . $_SESSION['message-d'] . ' </div>';
        }

        unset($_SESSION['message-d']);

        ?>
    </form>
    <p class="text-muted w-50 blockquote mx-auto"> У вас уже есть аккаунт? <a href="http://dentistry-wp/login/"> Войти </a></p>

</div>


<?php get_footer(); ?>