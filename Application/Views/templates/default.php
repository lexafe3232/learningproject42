<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тестовое веб-приложение</title>
    <link rel="stylesheet" href="/css/foundation.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <div class="grid-container header__wrap">
            <div class="grid-x grid-padding-x">
                <div class="large-4 medium-4 cell">
                    <a class="header__appname" href="/">Тестовое Веб-Приложение</a>
                </div>
                <div class="large-6 medium-6 cell text-right">
                    <? if (isset($_SESSION['user_id'])): ?>
                        <span>Добро пожаловать, <a class="header__profile-link" href="/profile/view/<?=$_SESSION['user_id']; ?>/"><?=$_SESSION['username']; ?></a>!</span>
                    <? endif; ?>
                </div>
                <div class="large-1 medium-1 cell text-right">
                    <? if (isset($_SESSION['user_id'])): ?>
                        <a href="/authorize/logout/" class="header__btn">Выйти</a>
                    <? endif; ?>
                </div>
                <div class="large-1 medium-1 cell text-left">
                    <a href="/ru/" class="lang-icon" title="Русский"><img alt="ru" src="/images/ru.png" /></a>
                    <a href="/en/" class="lang-icon" title="English"><img alt="en" src="/images/en.png" /></a>
                </div>

            </div>
        </div>
    </header>
    <div class="center">
        <div class="grid-container content__wrap">
            <?php
                include APP_ROOT.'/Views/'.$content_view;
            ?>
        </div>
    </div>
    <footer>
        <div class="grid-container footer__wrap">
            <span>© Сергей Собянин 2020</span>
        </div>
        <div style="display: none;">
            <script src="../../js/jquery.js"></script>
            <script src="../../js/foundation.js"></script>
            <script src="../../js/what-input.js"></script>
            <script src="../../js/app.js"></script>
        </div>
    </footer>
</body>
</html>