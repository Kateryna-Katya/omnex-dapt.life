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
            <span class="section-subtitle" data-aos="fade-right">Risk Disclosure</span>
            
            <div class="legal-header-flex" data-aos="fade-up">
                <div class="warning-icon-wrapper">
                    <i data-lucide="alert-triangle"></i>
                </div>
                <h1>Отказ от ответственности</h1>
            </div>

            <div class="legal-content glass-block" data-aos="fade-up">
                
                <div class="legal-section">
                    <h2><i data-lucide="info"></i> Общая информация</h2>
                    <p>
                        Все материалы, статьи и сведения, опубликованные на сайте <strong><?= $domainTitle ?></strong>, 
                        носят исключительно информационно-ознакомительный характер. Они не являются и не должны 
                        рассматриваться как персональная инвестиционная рекомендация, профессиональный юридический 
                        или финансовый совет, публичная оферта или призыв к совершению каких-либо финансовых операций.
                    </p>
                </div>

                <div class="legal-section">
                    <h2><i data-lucide="shield-off"></i> Отсутствие гарантий</h2>
                    <p>
                        Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий относительно точности, 
                        полноты или актуальности представленной в блоге информации. Любые упоминания потенциального 
                        карьерного роста, пассивного дохода или прошлых результатов наших клиентов не гарантируют 
                        аналогичных результатов в будущем. Индивидуальные итоги вашей деятельности зависят от 
                        множества факторов и могут существенно отличаться от приведенных примеров.
                    </p>
                </div>

                <div class="legal-section">
                    <h2><i data-lucide="user-x"></i> Ограничение ответственности</h2>
                    <p>
                        Администрация сайта <strong><?= $fullDomain ?></strong>, его владельцы и аффилированные лица 
                        не несут ответственности за любые прямые или косвенные убытки, решения или действия, 
                        предпринятые вами на основе информации с этого ресурса. Вся ответственность за использование 
                        методологий и возможные последствия лежит исключительно на пользователе.
                    </p>
                </div>

                <div class="risk-highlight-card" data-aos="zoom-in">
                    <div class="risk-highlight-card__content">
                        <h3><i data-lucide="zap"></i> Предупреждение о рисках</h3>
                        <p>
                            Любая деятельность, направленная на изменение финансового статуса или инвестиции в новые проекты, 
                            сопряжена с определенным уровнем риска. Перед принятием любых важных решений мы настоятельно 
                            рекомендуем провести собственное исследование и проконсультироваться с квалифицированным 
                            независимым специалистом в соответствующей области.
                        </p>
                    </div>
                </div>

                <div class="legal-section agreement-footer">
                    <p>
                        <strong>Подтверждение пользователя:</strong> Продолжая использовать сайт 
                        <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы 
                        действуете по собственной воле, полностью осознаете и принимаете все упомянутые риски 
                        и условия данного отказа от ответственности.
                    </p>
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