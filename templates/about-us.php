<?php require_once __DIR__ . "/includes/header.php"; ?>

<title>About BRULife</title>

<style type="text/css">
    
    #about > .partners {
        background:
            linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
            url("<?= APP_ROOT ?>assets/img/polygon-wall.jpg");
    }
    #values > div:first-of-type > div {
        background:
            linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
            url("<?= APP_ROOT ?>assets/img/ej-yao-scenic.jpg");
    }
    #values > div:nth-of-type(2) > div {
        background:
            linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
            url("<?= APP_ROOT ?>assets/img/dakota-roos-skeleton.jpg");
    }
    @media (min-width: 1024px) {
        #about .info-left,
        #about .img-left,
        #about .info-right,
        #about .img-right,
        #about .accent-left,
        #about .accent-right {
            opacity: 0;
        }
        #about .row.active .accent-left,
        #about .row.active .info-left,
        #about .row.active .img-left {
            animation-name: in-left;
            animation-duration: 0.75s;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
        }
        #about .row.active .accent-right,
        #about .row.active .info-right,
        #about .row.active .img-right {
            animation-name: in-right;
            animation-duration: 0.75s;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
        }
        #about .row.active .info-left,
        #about .row.active .img-left,
        #about .row.active .info-right,
        #about .row.active .img-right {
            animation-delay: 0.5s;
        }
        @keyframes in-left {
            from {
                transform: translateX(-10%);
                opacity: 0;
            } to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes in-right {
            from {
                transform: translateX(10%);
                opacity: 0;
            } to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    }
</style>

<link href="<?= APP_ROOT . 'assets/css/about.css?' . uniqid() ?>" rel="stylesheet">
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var elements = document.querySelectorAll("#about .row"),
            checkpoint = [];
        let scrollPosition,
            win = window;

        for (var i = 0, len = elements.length; i < len; i++) {
            checkpoint[i] = elements[i].offsetTop;
        }
        animateOnView();
        win.addEventListener("scroll", animateOnView);
        function animateOnView() {
            scrollPosition = win.scrollY + (win.innerHeight / 2);
            for (let i = checkpoint.length - 1; i >= 0; i--) {
                if (scrollPosition >= checkpoint[i]) {
                    addClass(elements[i], "active");
                    return false;
                }
            }
        }
        function hasClass(ele, cls) {
            return !!ele.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
        }
        function addClass(ele, cls) {
            if (!hasClass(ele, cls)) ele.className += " " + cls;
        }
        function removeClass(ele, cls) {
            if (hasClass(ele, cls)) {
                var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
                ele.className = ele.className.replace(reg, ' ');
            }
        }
    });
</script>

<?php require_once __DIR__ . "/includes/navbar.php"; ?>

<div class="w-full">
    <section id="about">
        <header><h3>About Us</h3></header>
        <div class="row">
            <div class="info-left">
                <div>
                    <p>BRULife Great Holdings is a newly created and established private holding company. At its establishment, the company secured and consolidated a diversified shareholding portfolio. The holding now plays an active role in stimulating and guiding the development of its constituent companies, all well-established entities and leading specialists in their own fields.</p>
                    <p>Focused investments are carried out directly or via subsidiaries across a wide range of industries and asset classes, including construction work, direct private equity, real estate, hospital development plan, media/movie production company, and basic industry startups.</p>
                </div>
            </div>
            <div class="graphics">
                <div class="img-right">
                    <img src="<?= APP_ROOT ?>assets/img/brulife-tagline.jpg" alt="brulife-tagline">
                </div>
                <div class="accent-right">
                    <div></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="graphics">
                <div class="img-left justify-end">
                    <img src="<?= APP_ROOT ?>assets/img/brulife-psd.jpg" alt="brulife-psd">
                </div>
                <div class="accent-left"></div>
            </div>
            <div class="info-right">
                <div>
                    <p>The company has a long-term investment perspective and prefers to grow organically through acquisitions in fields where the management has significant experience. The company makes most investments using its own equity capital, which allows optimum flexibility in terms of financing, and consequently swift investment decisions.</p>
                    <p>BRULife Great Holdings maintains close relationships with existing investment structures, funds, and asset managers, and is perpetually devoting efforts to developing its networks in order to identify appropriate investment opportunities.</p>
                    <p>BRULife Great Holdings also maintains a strategic relationship with their partner company, BRULife a private holding company dedicated to retail banking.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="values">
        <header>
            <h3 class="p-4">Our Mission</h3>
        </header>
        <div class="card-container-custom">
            <div>
                <p>To invest & build a company of sustainable investments driven by passion for excellence, honesty and integrity while giving importance to social, economic and environmental responsibilites.</p>
            </div>
            <div>
                <p>To improve & empower the lives of our employees and create an atmosphere of trust & professionalism in and outside of our workplace.</p>
            </div>
            <div>
                <p>To aid, help and participate in humanitarian missions for the upliftment of the lives of the Filipino.</p>
            </div>
        </div>
        <header>
            <h3 class="p-4">Our Vision</h3>
        </header>
        <div class="card-container-custom">
            <div>
                <p>Transforming lives by delivering world class quality in products, goods and services.</p>
            </div>
            <div>
                <p>World reknowned investment & holding company committed to fair and transparent dealings with it's stakeholders.</p>
            </div>
        </div>
        <header>
            <h3 class="p-4">Our Values</h3>
        </header>
        <div class="m-4 p-4 relative flex flex-wrap justify-center bg-white rounded-md">
            <div class="medal-item">
                <div class="graphics">
                    <img src="<?= APP_ROOT ?>assets/img/values/integrity.png" alt="integrity">
                </div>
                <div class="info">
                    <p>Honesty and Integrity</p>
                </div>
            </div>
            <div class="medal-item">
                <div class="graphics">
                    <img src="<?= APP_ROOT ?>assets/img/values/passion.png" alt="passion">
                </div>
                <div class="info">
                    <p>Passion for Excellence</p>
                </div>
            </div>
            <div class="medal-item">
                <div class="graphics">
                    <img src="<?= APP_ROOT ?>assets/img/values/humility.png" alt="humility">
                </div>
                <div class="info">
                    <p>Humility</p>
                </div>
            </div>
            <div class="medal-item">
                <div class="graphics">
                    <img src="<?= APP_ROOT ?>assets/img/values/creativity.png" alt="creativity">
                </div>
                <div class="info">
                    <p>Creativity</p>
                </div>
            </div>
            <div class="medal-item">
                <div class="graphics">
                    <img src="<?= APP_ROOT ?>assets/img/values/professionalism.png" alt="professionalism">
                </div>
                <div class="info">
                    <p>Professionalism</p>
                </div>
            </div>
            <div class="medal-item">
                <div class="graphics">
                    <img src="<?= APP_ROOT ?>assets/img/values/teamwork.png" alt="teamwork">
                </div>
                <div class="info">
                    <p>Team Work</p>
                </div>
            </div>
            <div class="medal-item">
                <div class="graphics">
                    <img src="<?= APP_ROOT ?>assets/img/values/service.png" alt="service">
                </div>
                <div class="info">
                    <p>Service</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require_once __DIR__ . "/includes/footer.php";
require_once __DIR__ . "/includes/scripts.php";
?>