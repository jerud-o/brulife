</head>
<body>
    <nav class="sticky h-[100px] w-full top-0 flex justify-between items-center bg-white border-b-[1px] border-b-slate-200 z-50">
        <div class="nav-logo">
            <a href="<?= APP_ROOT ?>">
                <img src="<?= APP_ROOT ?>assets/img/logo-banner.png" alt="BRU Life Logo Banner">
            </a>
        </div>
        <div class="nav-button">
            <a href="<?= APP_ROOT ?>contact">CONTACT US</a>
        </div>
        <div class="nav-toggle h-full">
            <a tabindex="0">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
        <ul class="nav-menu w-full block absolute top-full lg:h-full lg:w-auto lg:flex lg:flex-wrap-reverse lg:items-start lg:justify-end lg:static">
            <li class="nav-item"><a href="<?= APP_ROOT ?>">Home</a></li>
            <li class="nav-item"><a href="<?= APP_ROOT ?>projects">Projects</a></li>
            <li class="nav-item dropdown">
                <a tabindex="0">Partners</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="#">Arvin Construction</a></li>
                    <li class="dropdown-item"><a href="#">Divine Chemical</a></li>
                    <li class="dropdown-item"><a href="#">Graymark</a></li>
                    <li class="dropdown-item"><a href="#">Jaru Farm</a></li>
                    <li class="dropdown-item"><a href="#">Genco Engineering Services</a></li>
                    <li class="dropdown-item"><a href="<?= APP_ROOT ?>partners/brucgt">BRU Consumer Goods Trading</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="<?= APP_ROOT ?>careers">Careers</a></li>
            <li class="nav-item"><a href="<?= APP_ROOT ?>media">Entertainment & Media</a></li>
            <li class="nav-item dropdown">
                <a tabindex="0">About</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="<?= APP_ROOT ?>about">Our Company</a></li>
                    <li class="dropdown-item"><a href="<?= APP_ROOT ?>directors">The Directors</a></li>
                </ul>
            </li>
            <li class="nav-item button">
                <a href="<?= APP_ROOT ?>contact">Contact Us</a>
            </li>
        </ul>
    </nav>