<?php require_once "includes/header.php"; ?>

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
<style type="text/css">
    /* #directors .links {
        transform: translateX(calc(156px + 50%));
    }
    #directors .links .link-item p {
        transform: translate(2.5rem, -50%);
        visibility: hidden;
        transition: transform 0.25s;
    }
    #directors .links .link-item a:hover p {
        transform: translate(1.5rem, -50%);
        visibility: visible;
    } */
</style>
<style type="text/tailwindcss">
    * {
        @apply font-['Lato'];
    }
    section header h3 {
        @apply p-4 text-center text-3xl font-semibold;
    }
    #directors .links {
        @apply hidden;
    }
    #directors .card-custom .graphics {
        @apply h-[312px] w-[312px] relative;
    }
    #directors .card-custom .graphics img {
        @apply h-[312px] w-auto border-[1px] border-neutral-300 rounded-md object-cover;
    }
    #directors .card-custom .graphics .offset {
        @apply absolute p-4 w-full right-0 bottom-0 text-lg;
    }
    #directors .card-custom .graphics .offset button {
        @apply px-[0.9rem] py-2 bg-white rounded-full;
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
    /* #directors > div:not(:last-of-type) {
        @apply relative w-1/2;
    }
    #directors > div:not(:last-of-type) .card-custom {
        @apply relative top-0 left-full translate-x-[-50%];
    }
    #directors .links {
        @apply absolute ml-4 p-2 py-4 bg-white rounded-full flex flex-col gap-4;
    }
    #directors .link-item a {
        @apply relative p-2 hover:bg-slate-200 rounded-full;
    }
    #directors .link-item i {
        @apply text-lg;
    }
    #directors .link-item p {
        @apply absolute top-1/2 ml-6 px-4 py-2 whitespace-nowrap bg-white rounded-full;
    } */
</style>

<?php require_once "includes/navbar.php"; ?>

<div class="w-full">
    <section id="directors">
        <header>
            <h3>BRULife Directors</h3>
        </header>
        <div class="py-6 flex flex-wrap justify-evenly gap-8">
            <div class="card-custom">
                <div class="graphics">
                    <img src="assets/img/directors/ceo.jpg" alt="ceo">
                    <div class="offset">
                        <button><i class="fa-solid fa-share-nodes"></i></button>
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
            <div class="card-custom">
                <div class="graphics">
                    <img src="assets/img/directors/president.jpg" alt="president">
                    <div class="offset">
                        <div class="links">
                            <div class="link-item">
                                <a href="#">
                                    <i class="fa-brands fa-facebook"></i>
                                    <p>Facebook</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                    <p>Twitter</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="#">
                                    <i class="fa-solid fa-envelope"></i>
                                    <p>E-mail</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <h4>Lorenzo De Roa Abeleda</h4>
                    <p>Presdent</p>
                </div>
            </div>
            <div class="card-custom">
                <div class="graphics">
                    <img src="assets/img/directors/v-president.jpg" alt="vice-president">
                    <div class="offset">
                        <div class="links">
                            <div class="link-item">
                                <a href="#">
                                    <i class="fa-brands fa-facebook"></i>
                                    <p>Facebook</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                    <p>Twitter</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="#">
                                    <i class="fa-solid fa-envelope"></i>
                                    <p>E-mail</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <h4>Andrew Viduya Abeleda</h4>
                    <p>Vice President</p>
                </div>
            </div>
            <div class="card-custom">
                <div class="graphics">
                    <img src="assets/img/directors/marketing.jpg" alt="marketing">
                    <div class="offset">
                        <div class="links">
                            <div class="link-item">
                                <a href="#">
                                    <i class="fa-brands fa-facebook"></i>
                                    <p>Facebook</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                    <p>Twitter</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="#">
                                    <i class="fa-solid fa-envelope"></i>
                                    <p>E-mail</p>
                                </a>
                            </div>
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
                            <div class="link-item">
                                <a href="#">
                                    <i class="fa-brands fa-facebook"></i>
                                    <p>Facebook</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                    <p>Twitter</p>
                                </a>
                            </div>
                            <div class="link-item">
                                <a href="#">
                                    <i class="fa-solid fa-envelope"></i>
                                    <p>E-mail</p>
                                </a>
                            </div>
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
require_once "includes/footer.php";
require_once "includes/scripts.php";
?>