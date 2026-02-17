<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Карьерный апгрейд и инновации</title>
    
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M16 2L29 9.5V22.5L16 30L3 22.5V9.5L16 2Z' stroke='url(%23g1)' stroke-width='2'/%3E%3Ccircle cx='16' cy='16' r='6' fill='url(%23g2)'%3E%3Canimate attributeName='opacity' values='1;0.5;1' dur='3s' repeatCount='indefinite' /%3E%3C/circle%3E%3Cdefs%3E%3ClinearGradient id='g1' x1='3' y1='2' x2='29' y2='30'%3E%3Cstop stop-color='%237C4DFF'/%3E%3Cstop offset='1' stop-color='%2300E5FF'/%3E%3C/linearGradient%3E%3ClinearGradient id='g2' x1='10' y1='10' x2='22' y2='22'%3E%3Cstop stop-color='%2300E5FF'/%3E%3Cstop offset='1' stop-color='%23FF4081'/%3E%3C/linearGradient%3E%3C/defs%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Syne:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="hologram-bg"></div>

    <header class="header">
        <div class="container header__container">
            <a href="./#home" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>

            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#home" class="nav__link">Главная</a></li>
                    <li><a href="./#growth" class="nav__link">Путь роста</a></li>
                    <li><a href="./#methods" class="nav__link">Методы</a></li>
                    <li><a href="./#expertise" class="nav__link">Экспертиза</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-subtitle" data-aos="fade-right">Legal Documents</span>
            <h1 data-aos="fade-up">Политика использования файлов cookie</h1>

            <div class="legal-content glass-block" data-aos="fade-up">
                <p class="lead-text">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии.
                </p>

                <div class="legal-section">
                    <h2><i data-lucide="help-circle"></i> Что такое файлы cookie?</h2>
                    <p>
                        Файл cookie — это небольшой фрагмент данных (текстовый файл),
                        который веб-сайт сохраняет на вашем устройстве (компьютере, планшете
                        или смартфоне), когда вы его посещаете. Это позволяет платформе 
                        <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                        (например, логин, язык, настройки региона Германия и другие параметры).
                    </p>
                </div>

                <div class="legal-section">
                    <h2><i data-lucide="layers"></i> Какие типы файлов cookie мы используем?</h2>
                    <p>
                        Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <strong>Строго необходимые:</strong> Критически важны для функционирования. Позволяют перемещаться по страницам <strong><?= $domainTitle ?></strong>.
                        </li>
                        <li>
                            <strong>Аналитические:</strong> Сбор анонимной информации о том, как посетители используют наш сайт.
                        </li>
                        <li>
                            <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для персонализированного опыта в рамках Карьерного апгрейда.
                        </li>
                        <li>
                            <strong>Маркетинговые:</strong> Используются для доставки объявлений, соответствующих вашим интересам.
                        </li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2><i data-lucide="target"></i> Зачем мы используем файлы cookie?</h2>
                    <ul class="legal-list">
                        <li>Обеспечение стабильной и безопасной работы платформы.</li>
                        <li>Анализ пользовательского поведения для оптимизации контента.</li>
                        <li>Персонализация сервисов для пользователей в Европе.</li>
                        <li>Предоставление релевантных маркетинговых материалов.</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2><i data-lucide="settings"></i> Ваш выбор и управление</h2>
                    <p>
                        Вы имеете полный контроль над файлами cookie. Вы можете в любой
                        момент изменить свои настройки в браузере. Однако, обратите
                        внимание: отключение строго необходимых cookie может привести к
                        некорректной работе некоторых функций.
                    </p>
                </div>

                <div class="contact-info-block">
                    <h2><i data-lucide="message-square"></i> Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <ul class="contact-data-list">
                        <li>
                            <i data-lucide="mail"></i>
                            <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="phone"></i>
                            <strong>Телефон:</strong> <a href="tel:+49305525094">+49 30 5525 094</a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <strong>Адрес:</strong> Friedrichstraße 176, 10117 Berlin, Germany
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__col footer__col--brand">
                <a href="./#home" class="logo logo--footer">
                    <span class="logo__dot"></span>
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__description">
                    Инновационная технология вашего карьерного продвижения. Постройте карьеру, которая работает на вас.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__list">
                    <li><a href="./#home">Главная</a></li>
                    <li><a href="./#growth">Путь роста</a></li>
                    <li><a href="./#methods">Методы</a></li>
                    <li><a href="./#blog">Блог</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <a href="tel:+49305525094">+49 30 5525 094</a>
                    </li>
                    <li>
                        <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <span>Friedrichstraße 176, <br>10117 Berlin, Germany</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="container">
            <div class="footer__bottom">
                <p>© <?= date('Y') ?> <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.</p>
            </div>
        </div>
    </footer>

    <div class="mobile-menu">
        <div class="mobile-menu__inner">
            <nav class="mobile-nav">
                <ul class="mobile-nav__list">
                    <li><a href="./#home" class="mobile-nav__link">Главная</a></li>
                    <li><a href="./#growth" class="mobile-nav__link">Путь роста</a></li>
                    <li><a href="./#methods" class="mobile-nav__link">Методы</a></li>
                    <li><a href="./#expertise" class="mobile-nav__link">Экспертиза</a></li>
                    <li><a href="./#blog" class="mobile-nav__link">Блог</a></li>
                </ul>
            </nav>
            <a href="./#contact" class="btn btn--primary mobile-menu__btn">Бесплатная консультация</a>
        </div>
    </div>
    
    <div id="cookie-popup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p class="cookie-popup__text">
                Этот сайт использует cookies для улучшения работы. Подробнее — в нашей 
                <a href="./cookies.php">Cookie политике</a>.
            </p>
            <button id="cookie-accept" class="btn btn--header cookie-popup__btn">Принять</button>
        </div>
    </div>   
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>  
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
    <script src="script.js"></script>
</body>
</html>