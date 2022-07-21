<?php require_once __DIR__ . "/includes/header.php"; ?>

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
<style type="text/css">
    #about > .partners {
        background:
            linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
            url("assets/img/polygon-wall.jpg");
    }
    #values > div:first-of-type > div {
        background:
            linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
            url("assets/img/ej-yao-scenic.jpg");
    }
    #values > div:nth-of-type(2) > div {
        background:
            linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
            url("assets/img/dakota-roos-skeleton.jpg");
    }
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
        animation-delay: 1s;
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
</style>
<style type="text/tailwindcss">
    * {
        @apply font-['Lato'];
    }
    section header h3 {
        @apply pb-4 text-center text-5xl font-black tracking-wider uppercase;
    }
    #about header h3 {
        @apply pt-8;
    }
    #about > div {
        @apply md:my-6;
    }
    #about p {
        @apply m-4;
    }
    #about > .row {
        @apply flex overflow-x-hidden;
    }
    #about .row [class|="info"] {
        @apply w-full flex flex-col justify-center
            md:p-4 md:w-7/12;
    }
    #about .row [class|="info"] > div {
        @apply px-4 bg-white shadow-lg
            md:py-4 md:border-b-2 md:border-b-[color:var(--green)] md:rounded-md;
    }
    #about .row:nth-of-type(2) [class|="info"] p:first-of-type {
        @apply mt-0 md:mt-4;
    }
    #about .row .graphics {
        @apply relative hidden p-4 h-[60vh] justify-center items-center
            md:flex md:w-5/12;
    }
    #about .row .graphics > div:not([class|="accent"]) {
        @apply flex items-center h-full w-full z-10;
    }
    #about .row .graphics img {
        @apply h-[75%] w-auto rounded-md object-contain;
    }
    #about .row .graphics > div[class|="accent"] {
        @apply absolute top-0 h-full w-2/4 bg-[color:var(--green)];
    }
    #about .accent-left {
        @apply left-0 rounded-r-md;
    }
    #about .accent-right {
        @apply right-0 rounded-l-md;
    }
    #about > .partners {
        @apply p-4 bg-top bg-cover shadow-lg;
    }
    #about > .partners p {
        @apply p-4 text-white text-center text-lg font-medium;
    }
    #about > .partners .graphics {
        @apply m-6 flex flex-wrap justify-center items-center gap-8;
    }
    #values header h3 {
        @apply pt-12;
    }
    #values > .card-container-custom {
        @apply p-4 flex flex-col justify-center gap-4
            md:flex-row;
    }
    #values > .card-container-custom > div {
        @apply min-h-[200px] p-4 flex items-center bg-white rounded-md font-semibold text-xl text-white
            md:min-h-[312px];
    }
    #values > div:first-of-type > div {
        @apply w-full bg-[length:auto_300%]
            md:bg-[length:300%_auto] md:w-1/3;
    }
    #values > div:first-of-type > div:nth-of-type(1) {
        @apply bg-top md:bg-left;
    }
    #values > div:first-of-type > div:nth-of-type(2) {
        @apply bg-center;
    }
    #values > div:first-of-type > div:nth-of-type(3) {
        @apply bg-bottom md:bg-right;
    }
    #values > div:nth-of-type(2) > div {
        @apply w-full bg-[length:auto_200%]
            md:bg-[length:200%_auto] md:w-1/3;
    }
    #values > div:nth-of-type(2) > div:nth-of-type(1) {
        @apply bg-top md:bg-left;
    }
    #values > div:nth-of-type(2) > div:nth-of-type(2) {
        @apply bg-bottom md:bg-right;
    }
    #values .medal-item {
        @apply w-full w-1/2 md:w-1/3 lg:w-1/4 p-4;
    }
    #values .medal-item .graphics {
        @apply flex justify-center;
    }
    #values .medal-item .graphics img {
        @apply h-auto w-1/2;
    }
    #values .medal-item .info p {
        @apply block text-center font-medium;
    }
</style>
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
                    <img src="assets/img/brulife-tagline.jpg" alt="brulife-tagline">
                </div>
                <div class="accent-right">
                    <div></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="graphics">
                <div class="img-left">
                    <img src="assets/img/brulife-psd.jpg" alt="brulife-psd">
                </div>
                <div class="accent-left"></div>
            </div>
            <div class="info-right">
                <div>
                    <p>The company has a long-term investment perspective and prefers to grow organically through acquisitions in fields where the management has significant experience. The company makes most investments using its own equity capital, which allows optimum flexibility in terms of financing, and consequently swift investment decisions.</p>
                    <p>BRULife Great Holdings maintains close relationships with existing investment structures, funds, and asset managers, and is perpetually devoting efforts to developing its networks in order to identify appropriate investment opportunities.</p>
                </div>
            </div>
        </div>
        <div class="partners">
            <div>
                <p>BRULife Great Holdings also maintains a strategic relationship with their partner company, BRULife a private holding company dedicated to retail banking.</p>
            </div>
            <div class="graphics">
                <img src="assets/img/logo-banner.png" alt="demo-logo">
                <img src="assets/img/logo-banner.png" alt="demo-logo">
                <img src="assets/img/logo-banner.png" alt="demo-logo">
                <img src="assets/img/logo-banner.png" alt="demo-logo">
                <img src="assets/img/logo-banner.png" alt="demo-logo">
                <img src="assets/img/logo-banner.png" alt="demo-logo">
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
                    <img src="assets/img/values/integrity.png" alt="integrity">
                </div>
                <div class="info">
                    <p>Honesty and Integrity</p>
                </div>
            </div>
            <div class="medal-item">
                <div class="graphics">
                    <img src="assets/img/values/passion.png" alt="passion">
                </div>
                <div class="info">
                    <p>Passion for Excellence</p>
                </div>
            </div>
            <div class="medal-item">
                <div class="graphics">
                    <img src="assets/img/values/humility.png" alt="humility">
                </div>
                <div class="info">
                    <p>Humility</p>
                </div>
            </div>
            <div class="medal-item">
                <div class="graphics">
                    <img src="assets/img/values/creativity.png" alt="creativity">
                </div>
                <div class="info">
                    <p>Creativity</p>
                </div>
            </div>
            <div class="medal-item">
                <div class="graphics">
                    <img src="assets/img/values/professionalism.png" alt="professionalism">
                </div>
                <div class="info">
                    <p>Professionalism</p>
                </div>
            </div>
            <div class="medal-item">
                <div class="graphics">
                    <img src="assets/img/values/teamwork.png" alt="teamwork">
                </div>
                <div class="info">
                    <p>Team Work</p>
                </div>
            </div>
            <div class="medal-item">
                <div class="graphics">
                    <img src="assets/img/values/service.png" alt="service">
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