<div class="popup">
    <div class="popup__body">
        <div id="popup-for-drivers" class="popup__item">
            <button class="close-menu">
            </button>
            <div class="popup__item-title">
                Оставить заявку
            </div>
            <form id="driver-form" class="ajax-form">
                <input type="hidden" name="form_subject" value="Заявка от водителя!">
                <?php wp_nonce_field('driver_form_nonce', 'driver_nonce'); ?>

                <label>
                    <span>Ваше имя</span>
                    <input name="client_name" placeholder="Фамилия имя" type="text" required>
                </label>

                <label>
                    <span>Номер телефона</span>
                    <input name="client_phone" type="tel" placeholder="+79008007070" required>
                </label>

                <label>
                    <span>Формат рекламы:</span>
                    <select name="ad_format">
                        <option value="Полный">Полная обклейка</option>
                        <option value="Частичная">Частичная обклейка</option>
                        <option value="Только стекла">Только стекла</option>
                    </select>
                </label>

                <div class="action">
                    <button type="submit" class="main-btn">Отправить</button>
                </div>

                <div class="form-message"></div>
            </form>
        </div>

    </div>
</div>
</main>
<footer class="footer">
    <div class="container">
        <div class="footer__body">
            <div class="footer__title">
                <a class="logo-title" href="<?php get_home_url(); ?>">
                    <span>Sticker</span>
                    <span>Money</span>
                </a>
            </div>

            <div class="footer__nav">
                <ul>
                    <li>
                        <a href="">Водителям</a>
                    </li>
                    <li>
                        <a href="">Рекламодателям</a>
                    </li>
                </ul>
            </div>

            <div class="footer__info">
                <a href="mailto:test@gmail.com">test@gmail.com</a>
            </div>
        </div>
    </div>
</footer>
</div>


</body>

</html>
<?php wp_footer(); ?>