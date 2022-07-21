<footer class="px-16 py-8 flex flex-col gap-4 bg-white border-t-[1px] border-t-slate-200">
    <nav class="hidden lg:flex">
        <div class="w-1/4">
            <h6>Quick Links</h6>
            <ul>
                <li><a href="/brulife">Home</a></li>
                <li><a href="projects">Projects</a></li>
                <li><a href="careers">Careers</a></li>
                <li><a href="media">Entertainment & Media</a></li>
            </ul>
        </div>
        <div class="w-1/4">
            <h6>Partners</h6>
            <ul>
                <li><a href="#">Arvin Construction</a></li>
                <li><a href="#">Divine Medical</a></li>
                <li><a href="#">Graymark</a></li>
                <li><a href="#">Jaru Farm</a></li>
                <li><a href="#">Genco Engineering Services</a></li>
                <li><a href="#">BRU Consumer Goods Trading</a></li>
            </ul>
        </div>
        <div class="w-1/4">
            <h6>About</h6>
            <ul>
                <li><a href="about">Our Company</a></li>
                <li><a href="directors">The Directors</a></li>
            </ul>
        </div>
        <div class="w-1/4">
            <div class="flex flex-col gap-4">
                <a class="button" href="contact">Contact Us</a>
                <a href="#">info@brulifegreatholdings.com</a>
                <p>+63 966 465 6998</p>
                <p>+632 8801 5025</p>
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
                    <div class="link-item"><a href="#"><img src="assets/img/social-media/facebook.png" alt="fb-logo"></a></div>
                    <div class="link-item"><a href="#"><img src="assets/img/social-media/instagram.png" alt="insta-logo"></a></div>
                    <div class="link-item"><a href="#"><img src="assets/img/social-media/youtube.png" alt="yt-logo"></a></div>
                </div>
            </div>
            <div class="team">
                <p class="p-4 text-center text-xs md:text-right">Powered by <span class="text-sm font-bold">BRU IT Team</span></p>
            </div>
        </div>
    </div>
</footer>