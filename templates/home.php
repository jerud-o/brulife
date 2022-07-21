<?php require_once __DIR__ . "/includes/header.php"; ?>

<title>BRULife Greatholdings Corporation</title>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
<style type="text/css">
    #welcome {
        background:
            linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
            url("<?= APP_ROOT ?>assets/img/greg-rosenke-frames.jpg");
        background-size: cover;
        background-position: center;
    }
    .thin-scrollbar {
        scrollbar-color: rgb(179, 179, 179) #f1f1f1; /* thumb and track color */
        scrollbar-width: thin;
    }
    .thin-scrollbar::-webkit-scrollbar { height: 5px; }
    .thin-scrollbar::-webkit-scrollbar-track { background-color: #f1f1f1; border-radius: 3px; }
    .thin-scrollbar::-webkit-scrollbar-thumb { background-color: rgb(179, 179, 179); border-radius: 3px; }
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
        @apply my-4 text-xl font-bold;
    }
    #projects .list header a {
        @apply ml-1 text-sm font-medium;
    }
    #projects .list section {
        @apply px-6;
    }
    #projects .list section:first-of-type > div {
        @apply pb-4 overflow-auto flex gap-4 justify-start snap-x;
    }
    #projects .list .list-item-custom {
        @apply snap-start;
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
        <a href="#" class="block p-4 bg-stone-100 text-center">
            <p><i class="fa-solid fa-angles-down"></i></p>
            <p>Take a peek at our projects</p>
        </a>
        <div class="list">
            <section>
                <header>Project Investments <a href="#">See more</a></header>
                <div class="thin-scrollbar">
                    <div class="list-item-custom">
                        <div class="graphics">
                            <img src="<?= APP_ROOT ?>assets/img/project/001.png" alt="001">
                        </div>
                        <div class="info">
                            <h6>Dressing, Processing Plant</h6>
                            <p>Industrial</p>
                        </div>
                    </div>
                    <div class="list-item-custom">
                        <div class="graphics">
                            <img src="<?= APP_ROOT ?>assets/img/project/002.jpg" alt="002">
                        </div>
                        <div class="info">
                            <h6>BRUlife Twin Tower Business Center</h6>
                            <p>Business Building</p>
                        </div>
                    </div>
                    <div class="list-item-custom">
                        <div class="graphics">
                            <img src="<?= APP_ROOT ?>assets/img/project/005.jpg" alt="005">
                        </div>
                        <div class="info">
                            <h6>Platform Mall</h6>
                            <p>Mall</p>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <header>Future Project Highlights</header>
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