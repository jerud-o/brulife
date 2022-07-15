<?php require_once "includes/header.php"; ?>

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
<style type="text/css">
</style>
<style type="text/tailwindcss">
    * {
        @apply font-['Lato'];
    }
    #about {
        @apply overflow-hidden;
    }
    section header h3 {
        @apply text-center text-3xl font-semibold;
    }
    #about > div:not(:last-of-type) .graphics {
        @apply h-[60vh] hidden lg:block;
    }
    #about > div:last-of-type .graphics {
        @apply h-[30vh] m-6 flex flex-wrap justify-center items-center gap-8;
    }
    #about > div > div:not(.graphics) {
        @apply flex flex-col justify-center;
    }
    #about > div:last-of-type > div:not(.graphics) {
        @apply text-center;
    }
    #about p {
        @apply m-4;
    }
</style>

<?php require_once "includes/navbar.php"; ?>

<div class="w-full">
    <section id="about">
        <header>
            <h3 class="p-4">About Us</h3>
        </header>
        <div class="grid lg:grid-cols-2">
            <div>
                <p>BRULife Great Holdings is a newly created and established private holding company. At its establishment, the company secured and consolidated a diversified shareholding portfolio. The holding now plays an active role in stimulating and guiding the development of its constituent companies, all well-established entities and leading specialists in their own fields.</p>
                <p>Focused investments are carried out directly or via subsidiaries across a wide range of industries and asset classes, including construction work, direct private equity, real estate, hospital development plan, media/movie production company, and basic industry startups.</p>
            </div>
            <div class="graphics">

            </div>
        </div>
        <div class="grid lg:grid-cols-2"">
            <div class="graphics">

            </div>
            <div>
                <p>The company has a long-term investment perspective and prefers to grow organically through acquisitions in fields where the management has significant experience. The company makes most investments using its own equity capital, which allows optimum flexibility in terms of financing, and consequently swift investment decisions.</p>
                <p>BRULife Great Holdings maintains close relationships with existing investment structures, funds, and asset managers, and is perpetually devoting efforts to developing its networks in order to identify appropriate investment opportunities.</p>
            </div>
        </div>
        <div>
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
        <div>

        </div>
    </section>
</div>

<?php
require_once "includes/footer.php";
require_once "includes/scripts.php";
?>