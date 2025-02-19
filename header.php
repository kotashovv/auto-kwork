<!DOCTYPE html>
<html lang="ru">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_the_title(); ?> | <?php echo get_bloginfo('name'); ?></title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__body">
                    <div class="header__title">
                        <a href="<?php echo get_home_url(); ?>">
                            <span>Sticker</span>
                            <span>Money</span>
                        </a>
                    </div>
                    <div class="header__nav">
                        <nav>
                            <ul>
                                <li class="with-sublist">
                                    <a href="#">Водителям</a>
                                </li>
                                <li class="with-sublist">
                                    <a href="#">Рекламодателям</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__action">
                        <div class="header__social">
                            <a href="#">
                                <svg class="t-sociallinks__svg" role="presentation" width="30px" height="30px"
                                    viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50ZM25 34c.406 19.488 10.15 31.2 27.233 31.2h.968V54.05c6.278.625 11.024 5.216 12.93 11.15H75c-2.436-8.87-8.838-13.773-12.836-15.647C66.162 47.242 71.783 41.62 73.126 34h-8.058c-1.749 6.184-6.932 11.805-11.867 12.336V34h-8.057v21.611C40.147 54.362 33.838 48.304 33.556 34H25Z"
                                        fill="#ffffff"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="header__burger">
                            <button class="burger-btn"><span></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-header">
                <nav>
                    <ul>
                        <li>
                            <a href="#">Ссылка 1</a>
                        </li>
                        <li>
                            <a href="#">Ссылка 1</a>
                        </li>
                        <li>
                            <a href="#">Ссылка 1</a>
                        </li>
                        <li>
                            <a href="#">Ссылка 1</a>
                        </li>
                    </ul>
                </nav>
                <div class="info">
                    <a href="#">
                        test@gmail.com
                    </a>
                </div>
                <div class="action">
                    <button data-popup="#popup-for-drivers" class="main-btn" href="#">
                        Оставить заявку
                    </button>
                </div>
            </div>
        </header>