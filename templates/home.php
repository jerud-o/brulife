<?php require_once __DIR__ . "/includes/header.php"; ?>

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
<style type="text/css">
    #welcome {
        background:
            linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
            url("assets/img/greg-rosenke-frames.jpg");
        background-size: cover;
        background-position: center;
    }
</style>
<style type="text/tailwindcss">
    * {
        @apply font-['Lato'];
    }
    body > .grid > * {
        @apply col-span-12 relative;
    }
    #welcome {
        @apply h-[75vh] lg:h-auto p-6 text-white;
    }
    #welcome h2 {
        @apply text-[12vw] sm:text-[9vw] md:text-[8vw] lg:text-[7vw] font-black uppercase tracking-wider;
    }
    #projects .list header {
        @apply my-4 px-6 text-xl font-bold;
    }
    #projects .list header span {
        @apply ml-1 text-sm font-medium;
    }
    #projects .list section > div {
        @apply px-6 flex flex-wrap gap-2 justify-evenly;
    }
    #projects .list .graphics {
        @apply h-[312px] w-[312px];
    }
    #projects .list .graphics img {
        @apply h-[312px] w-auto border-[1px] border-neutral-300 rounded-md object-cover;
    }
    #projects .list .info h6 {
        @apply text-lg font-semibold;
    }
    #projects .list .info p {
        @apply text-sm text-neutral-400 font-light;
    }
</style>

<?php require_once __DIR__ . "/includes/navbar.php"; ?>

<div class="w-full">
    <section id="welcome" class="flex flex-col justify-center items-center">
        <div class="my-auto">
            <div>
                <h2>We Build and Restore in a Unique Way for You.</h2>
            </div>
            <div>

            </div>
        </div>
        <div class="w-full flex items-center gap-4">
            <div class="ml-auto text-right">
                <a href="#">info@brulifegreatholdings.com</a>
                <p>+63 966 465 6998</p>
                <p>+632 8801 5025</p>
            </div>
            <img class="h-[50px] sm:h-[75px]" src="assets/img/logo-white.png" alt="logo-white">
        </div>
    </section>
    <section id="projects">
        <a href="#" class="block p-4 bg-[color:var(--gray)] text-center">
            <p><i class="fa-solid fa-angles-down"></i></p>
            <p>Take a peek at our projects</p>
        </a>
        <div class="list">
            <section>
                <header>Project Investments <span>See more</span></header>
                <div>
                    <div class="list-item-custom">
                        <div class="graphics">
                            <img src="assets/img/upcoming-projects-img/001.png" alt="001">
                        </div>
                        <div class="info">
                            <h6>Dressing, Processing Plant</h6>
                            <p>Industrial</p>
                        </div>
                    </div>
                    <div class="list-item-custom">
                        <div class="graphics">
                            <img src="assets/img/upcoming-projects-img/002.jpg" alt="002">
                        </div>
                        <div class="info">
                            <h6>BRUlife Twin Tower Business Center</h6>
                            <p>Business Building</p>
                        </div>
                    </div>
                    <div class="list-item-custom">
                        <div class="graphics">
                            <img src="assets/img/upcoming-projects-img/005.jpg" alt="005">
                        </div>
                        <div class="info">
                            <h6>Platform Mall</h6>
                            <p>Mall</p>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <header>Future Projects</header>
                <div>
                    
                </div>
            </section>
        </div>
    </section>
</div>

<?php
require_once __DIR__ . "/includes/footer.php";
require_once __DIR__ . "/includes/scripts.php";
?>