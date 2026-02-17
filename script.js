/**
 * OMNEX DAPT - Ultimate Script 2026
 * Все функции: 3D, Скролл, Меню, Куки, Форма и Счетчики
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Инициализация плавного скролла Lenis
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // 2. Инициализация AOS (анимация появления)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            easing: 'cubic-bezier(0.16, 1, 0.3, 1)',
        });
    }

    // 3. Эффекты Хедера (изменение при скролле)
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });

    // 4. ЛОГИКА МОБИЛЬНОГО МЕНЮ (Fix)
    const burger = document.querySelector('.burger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link, .mobile-menu__btn');

    const toggleMenu = () => {
        burger.classList.toggle('burger--active');
        mobileMenu.classList.toggle('mobile-menu--active');
        // Блокируем скролл при открытом меню
        document.body.style.overflow = mobileMenu.classList.contains('mobile-menu--active') ? 'hidden' : '';
    };

    if (burger) {
        burger.addEventListener('click', toggleMenu);
    }

    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (mobileMenu.classList.contains('mobile-menu--active')) toggleMenu();
        });
    });

    // 5. Плавная навигация по якорям (интеграция с Lenis)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                lenis.scrollTo(target);
            }
        });
    });

    // 6. ЛОГИКА COOKIE POPUP (Fix)
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieBtn = document.getElementById('cookie-accept');

    if (cookiePopup && !localStorage.getItem('cookies-accepted')) {
        // Показываем через 2 секунды после загрузки
        setTimeout(() => {
            cookiePopup.classList.add('cookie-popup--active');
        }, 2000);
    }

    if (cookieBtn) {
        cookieBtn.addEventListener('click', () => {
            cookiePopup.classList.remove('cookie-popup--active');
            localStorage.setItem('cookies-accepted', 'true');
        });
    }

    // --- 3D И ИНТЕРАКТИВНЫЕ МОДУЛИ ---

    // 7. Hero 3D Animation (Сетка точек)
    const initHero3D = () => {
        const container = document.getElementById('hero-canvas-container');
        if (!container || typeof THREE === 'undefined') return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
        camera.position.z = 30;

        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        renderer.setSize(container.clientWidth, container.clientHeight);
        renderer.setPixelRatio(window.devicePixelRatio);
        container.appendChild(renderer.domElement);

        const geometry = new THREE.BufferGeometry();
        const vertices = [];
        for (let i = 0; i < 2000; i++) {
            vertices.push((Math.random() - 0.5) * 50, (Math.random() - 0.5) * 50, (Math.random() - 0.5) * 50);
        }
        geometry.setAttribute('position', new THREE.Float32BufferAttribute(vertices, 3));
        const material = new THREE.PointsMaterial({ size: 0.15, color: 0x7c4dff, transparent: true, opacity: 0.8, blending: THREE.AdditiveBlending });
        const particles = new THREE.Points(geometry, material);
        scene.add(particles);

        const animate = () => {
            requestAnimationFrame(animate);
            particles.rotation.y += 0.001;
            renderer.render(scene, camera);
        };
        animate();

        window.addEventListener('resize', () => {
            camera.aspect = container.clientWidth / container.clientHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(container.clientWidth, container.clientHeight);
        });
    };

    // 8. Methods 3D Animation (Torus)
    const initMethods3D = () => {
        const container = document.getElementById('methods-canvas-container');
        if (!container || typeof THREE === 'undefined') return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
        camera.position.z = 5;

        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        renderer.setSize(container.clientWidth, container.clientHeight);
        container.appendChild(renderer.domElement);

        const geometry = new THREE.TorusGeometry(2, 0.6, 16, 100);
        const material = new THREE.MeshBasicMaterial({ color: 0x7c4dff, wireframe: true, transparent: true, opacity: 0.3 });
        const torus = new THREE.Mesh(geometry, material);
        scene.add(torus);

        let scrollSpd = 0;
        const animate = () => {
            requestAnimationFrame(animate);
            scrollSpd *= 0.95;
            torus.rotation.x += 0.005 + scrollSpd;
            torus.rotation.y += 0.01 + scrollSpd;
            renderer.render(scene, camera);
        };
        animate();
        window.addEventListener('scroll', () => { scrollSpd = 0.05; });
    };

    // 9. Счетчики (Expertise)
    const initCounters = () => {
        const counters = document.querySelectorAll('.counter');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = +counter.getAttribute('data-target');
                    const duration = 2000;
                    let start = null;

                    const step = (ts) => {
                        if (!start) start = ts;
                        const progress = Math.min((ts - start) / duration, 1);
                        counter.innerText = Math.floor(progress * (2 - progress) * target);
                        if (progress < 1) window.requestAnimationFrame(step);
                        else counter.innerText = target;
                    };
                    window.requestAnimationFrame(step);
                    observer.unobserve(counter);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(c => observer.observe(c));
    };

    // 10. Форма и Капча
    const initForm = () => {
        const form = document.getElementById('contact-form');
        if (!form) return;
        
        const captchaLabel = document.getElementById('captcha-label');
        let n1 = Math.floor(Math.random() * 10) + 1, n2 = Math.floor(Math.random() * 10) + 1;
        let correct = n1 + n2;
        if (captchaLabel) captchaLabel.innerText = `Сколько будет ${n1} + ${n2}?`;

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (parseInt(document.getElementById('captcha-input').value) !== correct) {
                alert('Ошибка капчи'); return;
            }
            const btn = form.querySelector('.form__submit');
            btn.disabled = true; btn.innerText = 'Отправка...';
            setTimeout(() => {
                document.getElementById('form-success').classList.add('form__success--active');
            }, 1000);
        });
    };

    // Запуск всего
    initHero3D();
    initMethods3D();
    initCounters();
    initForm();
    if (typeof lucide !== 'undefined') lucide.createIcons();
});