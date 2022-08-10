<?php require_once __DIR__ . "/includes/header.php"; ?>

<title>BRULife Greatholdings Corporation</title>
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
 <link href="<?= APP_ROOT . 'assets/css/home-output.css?' . uniqid() ?>" rel="stylesheet">
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
                <header>Incoming Projects <a href="<?=APP_ROOT?>projects">See more</a></header>
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
                <header>Events/Activities</header>
                <div class="flex flex-col md:flex-row gap-4 mb-4">
                </div>
            </section>
        </div>
    </section>
</div>

<?php
require_once __DIR__ . "/includes/footer.php";
require_once __DIR__ . "/includes/scripts.php";
?>