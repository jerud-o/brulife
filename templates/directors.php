<?php require_once __DIR__ . "/includes/header.php"; ?>

<title>BRULife Directors</title>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
<style type="text/css">
</style>
<style type="text/tailwindcss">
    * {
        @apply font-['Lato'];
    }
    section header h3 {
        @apply pt-8 pb-4 text-center text-5xl font-black tracking-wider;
    }
    #directors > div {
        @apply p-4 flex flex-wrap justify-evenly;
    }
    #directors .card-custom .graphics {
        @apply h-[312px] w-[312px] relative;
    }
    #directors .card-custom .graphics:hover::after {
        @apply opacity-100;
    }
    #directors .card-custom .graphics::after {
        @apply transition-opacity duration-300 opacity-0 absolute h-1/4 w-full content-[''] top-3/4 bg-gradient-to-t from-[#000000cc]
    }
    #directors .card-custom .graphics img {
        @apply h-[312px] w-auto border-[1px] border-neutral-300 rounded-md object-cover;
    }
    #directors .card-custom .graphics .offset {
        @apply absolute p-4 w-full right-0 bottom-0 text-lg z-10;
    }
    #directors .card-custom .links {
        @apply flex gap-2;
    }
    #directors .card-custom a {
        @apply transition-all duration-100 flex items-center px-[0.5rem] py-[0.5rem] bg-white rounded-full text-sm
            hover:bg-slate-50;
    }
    #directors .card-custom .link-item:nth-of-type(1) a { @apply hover:text-[#4267B2]; }
    #directors .card-custom .link-item:nth-of-type(2) a { @apply hover:text-[#00acee]; }
    #directors .card-custom .link-item:nth-of-type(3) a { @apply hover:text-[color:var(--green)]; }
    #directors .card-custom .graphics:hover a {
        @apply px-[0.6rem] py-[0.6rem] text-lg;
    }
    #directors .card-custom .info {
        @apply text-center my-2;
    }
    #directors .card-custom .info h4 {
        @apply text-lg font-semibold;
    }
    #directors .card-custom .info p {
        @apply text-sm text-neutral-400 font-light;
    }
</style>

<?php require_once __DIR__ . "/includes/navbar.php"; ?>

<div class="w-full">
    <section id="directors">
        <header>
            <h3>BRULife DIRECTORS</h3>
        </header>
        <div>
            <div class="card-custom">
                <div class="graphics">
                    <img src="assets/img/directors/ceo.jpg" alt="ceo">
                    <div class="offset">
                        <div class="links">
                            <div class="link-item"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
                            <div class="link-item"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
                            <div class="link-item"><a href="#"><i class="fa-solid fa-envelope"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <h4>Rogelio V. Abeleda Jr.</h4>
                    <p>Chairman, Chief Executive Officer</p>
                </div>
            </div>
        </div>
        <div>
            <div class="card-custom">
                <div class="graphics">
                    <img src="assets/img/directors/president.jpg" alt="president">
                    <div class="offset">
                        <div class="links">
                            <div class="link-item"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
                            <div class="link-item"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
                            <div class="link-item"><a href="#"><i class="fa-solid fa-envelope"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <h4>Lorenzo De Roa Abeleda</h4>
                    <p>President</p>
                </div>
            </div>
            <div class="card-custom">
                <div class="graphics">
                    <img src="assets/img/directors/v-president.jpg" alt="vice-president">
                    <div class="offset">
                        <div class="links">
                            <div class="link-item"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
                            <div class="link-item"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
                            <div class="link-item"><a href="#"><i class="fa-solid fa-envelope"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <h4>Andrew Viduya Abeleda</h4>
                    <p>Vice President</p>
                </div>
            </div>
        </div>
        <div> 
            <div class="card-custom">
                <div class="graphics">
                    <img src="assets/img/directors/marketing.jpg" alt="marketing">
                    <div class="offset">
                        <div class="links">
                            <div class="link-item"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
                            <div class="link-item"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
                            <div class="link-item"><a href="#"><i class="fa-solid fa-envelope"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <h4>Klaire V. Abeleda</h4>
                    <p>Marketing Director</p>
                </div>
            </div>
            <div class="card-custom">
                <div class="graphics">
                    <img src="assets/img/directors/finance.jpg" alt="finance">
                    <div class="offset">
                        <div class="links">
                            <div class="link-item"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
                            <div class="link-item"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
                            <div class="link-item"><a href="#"><i class="fa-solid fa-envelope"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <h4>Mely Basilo Domingo</h4>
                    <p>Corporate Secretary, Finance Directore</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require_once __DIR__ . "/includes/footer.php";
require_once __DIR__ . "/includes/scripts.php";
?>