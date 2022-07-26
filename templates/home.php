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
        @apply h-[75vh] p-6 text-white;
    }
    #welcome h2 {
        @apply text-[10vw] sm:text-[7vw] md:text-[6vw] lg:text-[5vw] font-black uppercase tracking-wider;
    }
    #projects .list header {
        @apply my-4 text-xl font-bold;
    }
    #projects .list header a {
        @apply ml-1 text-sm font-medium hover:text-[color:var(--green)];
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
        @apply inline-block h-[275px] w-[275px];
    }
    #projects .list .graphics img {
        @apply h-[275px] w-auto border-[1px] border-neutral-300 rounded-md object-cover;
    }
    #projects .list .info a {
        @apply text-lg font-semibold;
    }
    #projects .list .info p {
        @apply text-sm text-neutral-400 font-light;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        document.getElementById("btn-scroll-project").addEventListener("click", function(e) {
                e.preventDefault();
                let position =
                    document.querySelector("#projects .list").offsetTop
                    - document.querySelector("nav").offsetHeight
                    - 16;
                smoothScrollTo(position, 250);
            });
    });
</script>

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
                <a href="mailto:info@brulifegreatholdings.com">info@brulifegreatholdings.com</a>
                <p>+63 966 465 6998</p>
                <p>+632 8801 5025</p>
            </div>
            <img class="h-[50px] sm:h-[75px]" src="assets/img/logo-white.png" alt="logo-white">
        </div>
    </section>
    <section id="projects">
        <a id="btn-scroll-project" href="#" class="block p-4 bg-stone-100 text-center">
            <p><i class="fa-solid fa-angles-down"></i></p>
            <p>Take a peek at our projects</p>
        </a>
        <div class="list">
            <section>
                <header>Project Investments <a href="<?=APP_ROOT?>projects">See more</a></header>
                <div class="thin-scrollbar">
                    <?php foreach ($projectArray as $project) : ?>
                        <div class="list-item-custom">
                            <a href="<?=APP_ROOT?>project/<?=base64_encode($project->id)?>" class="graphics">
                                <img src="<?=APP_ROOT?>assets/img/project/<?=$project->imagePath?>" alt="<?=$project->imagePath?>">
                            </a>
                            <div class="info">
                                <a href="<?=APP_ROOT?>project/<?=base64_encode($project->id)?>"><?=ucwords($project->title)?></a>
                                <?php foreach ($project->tags as $tag) : ?>
                                    <p><?=ucwords($tag)?></p>
                                <?php endforeach ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>
            <section>
                <header>Future Project Highlights</header>
                <div class="flex flex-col md:flex-row gap-4 mb-4">
                    <iframe class="h-[312px] w-full md:w-1/2" src="https://www.youtube.com/embed/J7b1-LU1rwE" title="Malolos, Bulacan: Land Area 15 hectars" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe class="h-[312px] w-full md:w-1/2" src="https://www.youtube.com/embed/ZQt_dyFhCFM" title="DRT Bulacan 305 has construction project" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </section>
        </div>
    </section>
</div>

<?php
require_once __DIR__ . "/includes/footer.php";
require_once __DIR__ . "/includes/scripts.php";
?>