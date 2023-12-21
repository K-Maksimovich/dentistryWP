<?php
/* Template Name: страница Home */
session_start();

get_header();
?>

    <!-- Main -->
    <section class="main">
        <div class="container">

            <?php
            if ($_SESSION['message-g']){
                echo '<div class="alert alert-success m-2" role="alert"> ' . $_SESSION['message-g'] . ' </div>';
            }

            unset($_SESSION['message-g']);

            ?>
<!--            <img src="--><?php //echo B_IMG_DIR ?><!--/di_kaprio.jpg" alt="">-->

            <div class="leftBlock">
                <div class="top_block">
                    <h1>Dentistry 14</h1>
                    <p>Стоматологическая компания №3 <br>
                        в Пвлодаре</p>
                </div>
                <div class="facts_list">
                    <div class="facts_block">
                        <span>24ч.</span>
                        <p>Доступны наши врачи <br> на самый крайний случай</p>
                    </div>

                    <div class="facts_block">
                        <span>+19</span>
                        <p>Опытных специалистов</p>
                    </div>

                    <div class="facts_block">
                        <span>+4</span>
                        <p>Года и выше - стаж всех нашиз сотрудников.</p>
                    </div>

                    <div class="facts_block">
                        <span>Быстро.</span>
                        <p>Запишитесь на приём <br> за 2 минуты</p>
                    </div>
                </div>
            </div>
            <div class="rightBlock">

            </div>
        </div>
    </section>

    <section class="more_facts">
        <div class="container">
            <div class="moreFacts">

                <div class="detailFacts" id="callCenter">
                    <div class="headBlock">
                        <ion-icon name="call-outline" class="funcIcon"></ion-icon>
                        <span>Call-center и администраторы</span>
                    </div>
                    <div id="carouselCallCenter" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" id="carousel-inner">
                            <div class="carousel-item active">
                                <h1>На связи 24 часа.</h1>
                                <h4>Если у вас или у вашей семьи что-то случилось ночью мы постараемся предоставить первую помощь в кратчайшие сроки.</h4>
                            </div>
                            <div class="carousel-item">
                                <h1>Приём.</h1>
                                <h4>В любой момент узнайте есть ли у вас запись на приём или присутсвует ли врач в стоматологии.</h4>
                            </div>
                            <div class="carousel-item">
                                <h1>Нет проблем.</h1>
                                <h4>Наши администраторы помогут вам в случае если у вас возникли проблемы с сайтом.</h4>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCallCenter" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselCallCenter" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>


                <div class="detailFacts" id="inventoryControl">
                    <div class="headBlock">
                        <ion-icon name="albums-outline" class="funcIcon"></ion-icon>
                        <span>Складской учет данных</span>
                    </div>
                    <div id="carouselInventoryControl" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" id="carousel-inner">
                            <div class="carousel-item active">
                                <h1>Реггистрация</h1>
                                <h4>Нам нужна для того, что бы вы так же как и мы, всегда имели доступ к вашим данным.</h4>
                            </div>
                            <div class="carousel-item">
                                <h1>Ваши данные</h1>
                                <h4>полностью защищены и доступны только вам и врачу для вашего же удобства и безопастности. Больше никаких тетрадок :)</h4>
                            </div>
                            <div class="carousel-item">
                                <h1>Вы можете</h1>
                                <h4>Потребовать удаления ваших данных. Но в том случае если вы к нам снова обратитесь, все данные придётся собирать заново.</h4>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselInventoryControl" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselInventoryControl" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="contacts">
        <div class="container">
            <div class="cont-block-list">
                <div class="cont-block">
                    <h1>Dentistry 14</h1>
                    <p>
                        <ion-icon name="phone-portrait-outline"></ion-icon>
                        Телефон: <a href="tel:">+0-000-000-00-00</a></p>
                    <p>
                        <ion-icon name="mail-outline"></ion-icon>
                        Email: <a href="mailto:dentistry14pvl@gmail.com">dentistry14pvl@gmail.com</a></p>
                    <p>
                        <ion-icon name="navigate-outline"></ion-icon>
                        Юр. адрес: <br> Республика Казахстан, <br> город Павлодар, <br> район ***, <br> улица *****</p>
                </div>
                <div class="cont-block">
                    <h1>Документы</h1>
                    <a href="">
                        <ion-icon name="document-outline"></ion-icon>
                        Публичная оферта
                    </a>
                    <a href="">
                        <ion-icon name="document-outline"></ion-icon>
                        Политика возврата и отказа
                    </a>
                    <a href="http://dentistry-wp/%d0%bf%d0%be%d0%bb%d0%b8%d1%82%d0%b8%d0%ba%d0%b0-%d0%ba%d0%be%d0%bd%d1%84%d0%b8%d0%b4%d0%b5%d0%bd%d1%86%d0%b8%d0%b0%d0%bb%d1%8c%d0%bd%d0%be%d1%81%d1%82%d0%b8/">
                        <ion-icon name="document-outline"></ion-icon>
                        Конфиденциальность Dentistry 14
                    </a>
                    <a href="">
                        <ion-icon name="document-outline"></ion-icon>
                        Пользовательское соглашение Dentistry 14
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();?>