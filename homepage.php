<?php
/*
Template Name: Водителям
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main class="main">
    <section class="hero">
        <div class="container">
            <div class="hero__text">
                <h1>
                    Зарабатывай на рекламе на своем автомобиле вместе <br>
                    <strong>
                        Sticker <span>&</span> Money
                    </strong>
                </h1>
                <div class="action">
                    <button data-popup="#popup-for-drivers" class="main-btn">Оставить заявку</button>
                </div>
            </div>
        </div>
    </section>

    <section class="breaker">
        <div class="container">
            <div class="breaker__body">
                <div class="breaker__img">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/breaker.png" alt="">
                </div>
                <div class="breaker__text">
                    <h2>
                        Размещайте рекламные наклейки на авто, а компании будут платить деньги за эту
                        возможность.
                    </h2>
                    <p>
                        Помимо рутинной езды вы также можете участвовать в квестах и флэшмобах, которые повысят
                        ваш заработок!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="edge">
        <div class="container">
            <div class="edge__items">
                <article class="edge__item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/e1.svg" alt="">
                    </div>
                    <div class="text">
                        <h3>
                            Зарабатывайте деньги
                        </h3>
                        <p>
                            Катайтесь как обычно, а расходы на бензин, мойку и паркинг оплатят компании
                        </p>
                    </div>
                </article>
                <article class="edge__item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/e2.svg" alt="">
                    </div>
                    <div class="text">
                        <h3>
                            Безопасно
                        </h3>
                        <p>
                            Стикеры не повредят ЛКП вашего авто и легко удаляются
                        </p>
                    </div>
                </article>
                <article class="edge__item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/e3.svg" alt="">
                    </div>
                    <div class="text">
                        <h3>
                            Красивый дизайн
                        </h3>
                        <p>
                            Уникальный дизайн добавят харизмы вашему железному другу
                        </p>
                    </div>
                </article>
                <article class="edge__item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/e4.svg" alt="">
                    </div>
                    <div class="text">
                        <h3>
                            Интересно
                        </h3>
                        <p>
                            Почувствуйте свой вклад в продвижение любимых брендов
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="work">
        <div class="container">
            <div class="work__title ">
                <h2 class="section-title">
                    Шаги к подключению
                </h2>
            </div>
            <div class="work__items">
                <div class="work__item">
                    <div class="num">
                        <span>1</span>
                    </div>
                    <div class="text">
                        <h3>
                            Регистрация
                        </h3>
                        <p>
                            Подайте заявку на регистрацию вашего автомобиля. Это абсолютно безопасно: мы не
                            передаем ваши данные третьим лицам, а также не будем присылать спам!
                        </p>
                    </div>
                </div>
                <div class="work__item">
                    <div class="num">
                        <span>2</span>
                    </div>
                    <div class="text">
                        <h3>
                            Диалог
                        </h3>
                        <p>
                            С вами свяжется менеджер, который ответит на все вопросы и расскажет о вариантах
                            оклеек: Заднее стекло, борт, капот или всё вместе. От этого будет зависеть уровень
                            вашего дохода! Чем больше наклеек, тем лучше!
                        </p>
                    </div>
                </div>
                <div class="work__item">
                    <div class="num">
                        <span>3</span>
                    </div>
                    <div class="text">
                        <h3>
                            Монтаж
                        </h3>
                        <p>
                            Приезжайте на пункт оклейки автомобиля. Это не займет много времени. Во время
                            процедуры вы можете наблюдать за всем процессом.
                            <br>
                            <b>Это абсолютно безопасно для вашего ЛКП</b>
                            <br>
                            <b>Работают только профессионалы</b>
                        </p>
                    </div>
                </div>
                <div class="work__item">
                    <div class="num">
                        <span>4</span>
                    </div>
                    <div class="text">
                        <h3>
                            Успех
                        </h3>
                        <p>
                            Все процедуры пройдены, теперь ваш автомобиль будет приносить вам пассивный доход!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feedback">
        <div class="container">
            <div class="feedback__title">
                Оставьте заявку прямо сейчас!
            </div>
            <div class="feedback__action">
                <button class="main-btn">Оставить заявку</button>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="gallery__items">
            <a class="gallery__item" data-fancybox="gallery" href="assets/imgs/g1.jpg">
                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/g1.jpg" alt="">
            </a>
            <a class="gallery__item" data-fancybox="gallery" href="assets/imgs/g2.jpg">
                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/g2.jpg" alt="">
            </a>
            <a class="gallery__item" data-fancybox="gallery" href="assets/imgs/g3.jpg">
                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/g3.jpg" alt="">
            </a>
            <a class="gallery__item" data-fancybox="gallery" href="assets/imgs/g4.jpg">
                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/g4.jpg" alt="">
            </a>
        </div>
    </section>

    <div class="reviews">
        <div class="container">
            <div class="reviews__title">
                <h2 class="section-title">
                    Что люди говорят о нас!
                </h2>
            </div>
            <div class="reviews__items">
                <div class="review__item">
                    <div class="text">
                        <p>
                            Машина стала выглядеть еще симпатичнее. Мне очень нравится,
                            а еще за это и платят!
                        </p>
                    </div>
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/r1.jpg" alt="">
                        <p>
                            Олег Л.
                        </p>
                        <span>
                            Студент
                        </span>
                    </div>
                </div>
                <div class="review__item">
                    <div class="text">
                        <p>
                            Машина стала выглядеть еще симпатичнее. Мне очень нравится,
                            а еще за это и платят!
                        </p>
                    </div>
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/r2.jpg" alt="">
                        <p>
                            Олег Л.
                        </p>
                        <span>
                            Студент
                        </span>
                    </div>
                </div>
                <div class="review__item">
                    <div class="text">
                        <p>
                            Машина стала выглядеть еще симпатичнее. Мне очень нравится,
                            а еще за это и платят!
                        </p>
                    </div>
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/r3.jpg" alt="">
                        <p>
                            Олег Л.
                        </p>
                        <span>
                            Студент
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="faq">
        <div class="container">
            <div class="faq__title">
                <h2 class="section-title">
                    Частые вопросы:
                </h2>
            </div>

            <div class="faq__items">
                <article class="faq__item">
                    <button class="faq__btn">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, nemo!</button>
                    <div class="faq__text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure magnam dolor corporis soluta cumque veniam autem, impedit ratione. Libero dolore in nesciunt omnis eos aperiam facere voluptate veniam doloribus assumenda.
                        </p>
                    </div>
                </article>
                <article class="faq__item">
                    <button class="faq__btn">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, nemo!</button>
                    <div class="faq__text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure magnam dolor corporis soluta cumque veniam autem, impedit ratione. Libero dolore in nesciunt omnis eos aperiam facere voluptate veniam doloribus assumenda.
                        </p>
                    </div>
                </article>
                <article class="faq__item">
                    <button class="faq__btn">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, nemo!</button>
                    <div class="faq__text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure magnam dolor corporis soluta cumque veniam autem, impedit ratione. Libero dolore in nesciunt omnis eos aperiam facere voluptate veniam doloribus assumenda.
                        </p>
                    </div>
                </article>
                <article class="faq__item">
                    <button class="faq__btn">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, nemo!</button>
                    <div class="faq__text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure magnam dolor corporis soluta cumque veniam autem, impedit ratione. Libero dolore in nesciunt omnis eos aperiam facere voluptate veniam doloribus assumenda.
                        </p>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <?php get_footer(); ?>