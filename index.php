<?php require_once "includes/header.php"; ?>

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
<style type="text/tailwindcss">
    #welcome > * {
        @apply p-4 flex justify-center items-center flex-col;
    }
    .carousel-item {
        @apply h-[50vh];
    }
</style>

<?php require_once "includes/navbar.php"; ?>

<div id="welcome" class="grid grid-cols-12 h-[70vh] bg-[color:var(--green)] text-white">
    <div class="col-span-6 p-4">
        <h2 class="font-['Lato'] text-7xl uppercase font-bold">We Build and Restore in a Unique Way for You</h2>
    </div>
    <div class="col-span-6 p-4">
        <p class="font-['Noto_Sans_Display']">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate, tortor sed mollis varius, purus est viverra nibh, ut tincidunt lacus diam a erat. Maecenas maximus lobortis elit, ac aliquam purus feugiat sed.</p>
        <button id="learn-more" class="transition duration-100 p-4 border-2 border-white font-['Lato'] font-semibold uppercase hover:bg-white hover:text-green-600">Learn More</button>
    </div>
</div>
<div class="relative">
    <h3 class="absolute px-8 py-4 top-0 right-1/2 translate-x-1/2 translate-y-[-50%] bg-[color:var(--red)] font-['Lato'] font-bold text-4xl uppercase text-white">Projects</h3>
    
    <div class="p-8 pt-16 grid grid-cols-12">
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide relative col-span-5" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner relative overflow-hidden">
                <div class="carousel-item active float-left w-full bg-green-100">
                    <h3>1</h3>
                </div>
                <div class="carousel-item float-left w-full bg-green-200">
                    <h3>2</h3>
                </div>
                <div class="carousel-item float-left w-full bg-green-300">
                    <h3>3</h3>
                </div>
            </div>
            <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="col-span-7">
            <div class="taglist">
                <p>Tag 1</p>
                <p>Tag 2</p>
                <p>Tag 3</p>
            </div>
            <h4 class="font-['Alegreya_Sans'] text-3xl uppercase font-semibold">Project title.</h4>
            <p class="font-['Noto_Sans_Display']">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate, tortor sed mollis varius, purus est viverra nibh, ut tincidunt lacus diam a erat. Maecenas maximus lobortis elit, ac aliquam purus feugiat sed.</p>
            <button>View Project</button>
            <button>View All Project</button>
        </div>
    </div>
</div>

<?php
require_once "includes/footer.php";
require_once "includes/scripts.php";
?>