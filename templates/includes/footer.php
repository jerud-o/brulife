<footer class="px-16 py-8 flex flex-col gap-4 bg-white border-t-[1px] border-t-slate-200">
    <nav class="hidden lg:flex">
        <div>
            <h6>Quick Links</h6>
            <ul>
                <li><a href="<?= APP_ROOT ?>">Home</a></li>
                <li><a href="<?= APP_ROOT ?>projects">Projects</a></li>
                <li><a href="<?= APP_ROOT ?>careers">Careers</a></li>
                <li><a href="<?= APP_ROOT ?>media">Entertainment & Media</a></li>
            </ul>
        </div>
        <div>
            <h6>Partners</h6>
            <ul>
                <li><a href="<?= APP_ROOT ?>partners/arvyn">Arvyn Construction</a></li>
                <li><a href="<?= APP_ROOT ?>partners/devine">Devine Chemical Resources</a></li>
                <li><a href="<?= APP_ROOT ?>partners/graymark">Graymark</a></li>
                <li><a href="<?= APP_ROOT ?>partners/jarufarm">Jaru Farm</a></li>
                <li><a href="<?= APP_ROOT ?>partners/aemm">Genco Engineering Services</a></li>
                <li><a href="<?= APP_ROOT ?>partners/brucgt">BRU Consumer Goods Trading</a></li>
            </ul>
        </div>
        <div>
            <h6>About</h6>
            <ul>
                <li><a href="<?= APP_ROOT ?>about">Our Company</a></li>
                <li><a href="<?= APP_ROOT ?>directors">The Directors</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <ul class="flex flex-col gap-4">
                <li><a class="button" href="<?= APP_ROOT ?>contact">Contact Us</a></li>
                <li>
                    <div><i class="fa-solid fa-envelope"></i></div>
                    <a href="mailto:info@brulifegreatholdings.com">info@brulifegreatholdings.com</a>
                </li>
                <li>
                    <div><i class="fa-solid fa-phone"></i></div>
                    <p>+63 966 465 6998</p>
                </li>
                <li>
                    <div><i class="fa-solid fa-phone"></i></div>
                    <p>+632 8801 5025</p>
                </li>
            </div>
        </div>
    </nav>
    <div class="flex flex-col md:flex-row gap-4">
        <div class="w-full md:w-3/4 flex flex-col md:flex-row gap-4">
            <div class="flex justify-center">
                <img class="self-center" src="<?= APP_ROOT . 'assets/img/logo-banner.png' ?>" alt="logo-banner">
            </div>
            <div class="flex flex-col justify-center text-center md:text-left">
                <div>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quis eos necessitatibus enim!</p>
                </div>
                <div>
                    <p class="text-xs text-slate-400">Copyright &copy; <?= date("Y"); ?>. <a href="/brulife" tabindex="-1">BRULife Greatholdings Corporation</a> and/or its subsidiaries and affliates. All Rights Reserved.</p>
                </div>
            </div>
        </div>
        <div class="links w-full md:w-1/4">
            <div class="flex flex-col items-center md:items-start">
                <h6>Follow Us</h6>
                <div class="w-full flex justify-center lg:justify-start items-center px-4 gap-4 relative">
                    <div class="link-item"><a href="https://www.facebook.com/brulifegreatholdingscorporation/" target="_blank"><img src="<?= APP_ROOT ?>assets/img/social-media/facebook.png" alt="fb-logo"></a></div>
                    <div class="link-item"><a href="https://www.instagram.com/allaboutbrulife/" target="_blank"><img src="<?= APP_ROOT ?>assets/img/social-media/instagram.png" alt="insta-logo"></a></div>
                    <div class="link-item"><a href="https://www.youtube.com/channel/UCfZ4kY2ve7yy7u0v5hCOOwA" target="_blank"><img src="<?= APP_ROOT ?>assets/img/social-media/youtube.png" alt="yt-logo"></a></div>
                </div>
            </div>
            <div class="team">
                <p class="p-4 text-center text-xs md:text-right">Powered by <span class="text-sm font-bold">BRU IT Team</span></p>
            </div>
        </div>
    </div>
</footer>