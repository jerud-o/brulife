<?php require_once __DIR__ . "/includes/header.php"; ?>

<script src="assets/js/dropdown.js"></script>
<link rel="stylesheet" href="assets/css/project.css">
<link rel="icon" href="assets/img/icon-banner.png">
<title>Upcoming Projects</title>

<?php require_once __DIR__ . "/includes/navbar.php"; ?>

<div class="custom-content-bg bg-[url('assets/img/project/bg-img-02.jpg')]">

    <div class="lg:hidden custom-dropdown">
        <button onclick="myFunction()" class="custom-dropbtn">Show All</button>
        <div id="myDropdown" class="custom-dd-content">
            <a href="#">Show All</a>
            <a href="#">Subdivision</a>
            <a href="#">Business Buidling</a>
            <a href="#">Hospital</a>
            <a href="#">Malls</a>
            <a href="#">Industrial</a>
            <a href="#">Agricultural</a>
        </div>
    </div>

    <div class="p-10 hidden lg:block">
        <div class="w-[80%] lg:w-[97%] xl:w-[80%] m-auto">
            <ul class="filter-list-custom">
                <li><a href="#">Show All</a></li>
                <li><a href="#">Subdivision</a></li>
                <li><a href="#">Business Buidling</a></li>
                <li><a href="#">Hospital</a></li>
                <li><a href="#">Malls</a></li>
                <li><a href="#">Industrial</a></li>
                <li><a href="#">Agricultural</a></li>
            </ul>
        </div>
    </div>

    <div class="card-flex-custom">
        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/001.png" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>DRESSING AND PROCESSING PLANT</h3>
                <p>INDUSTRIAL</p>
                <a href="project"><button class="btn-custom">See More</button></a>
            </div>
        </div>

        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/002.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>BRU LIFE TWIN TOWER BUSINESS CENTER</h3>
                <p>BUSINESS BLDG.</p>
                <a href="project"><button class="btn-custom">See More</button></a>
            </div>
        </div>
    </div>

    <div class="card-flex-custom">
        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/003.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>THE PLATFORM MALL</h3>
                <p>MALLS</p>
                <a href="project"><button class="btn-custom">See More</button></a>
            </div>
        </div>

        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/004.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>KLAIRES VILLE SUBDIVISION</h3>
                <p>SUBDIVISION</p>
                <a href="project"><button class="btn-custom">See More</button></a>
            </div>
        </div>
    </div>

    <div class="card-flex-custom">
        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/005.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>NEW HOPE MEDICAL CENTRE</h3>
                <p>HOSPITALS</p>
                <a href="project"><button class="btn-custom">See More</button></a>
            </div>
        </div>

        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/006.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>BRU LIFE IP TOWER</h3>
                <p>BUSINESS BLDG.</p>
                <a href="project"><button class="btn-custom">See More</button></a>
            </div>
        </div>
    </div>

    <div class="card-flex-custom">
        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/007.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>NEW HOPE MEDICAL CENTRE</h3>
                <p>HOSPITALS</p>
                <a href="project"><button class="btn-custom">See More</button></a>
            </div>
        </div>

        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/008.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>RICEFIELD</h3>
                <p>AGRICULTURAL</p>
                <a href="project"><button class="btn-custom">See More</button></a>
            </div>
        </div>
    </div>

    <div class="card-flex-custom">
        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/009.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>WATER AND WATER SEWAGE TREATMENT</h3>
                <p>INDUSTRIAL</p>
                <a href="project"><button class="btn-custom">See More</button></a>
            </div>
        </div>

        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/010.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>CATTLE</h3>
                <p>AGRICULTURAL</p>
                <a href="project"><button class="btn-custom">See More</button></a>
            </div>
        </div>
    </div>

    <div class="custom-pagination">
        <a class="custom-previous-icon" href="#"><i class="fa-solid fa-angles-left"></i></a>
        <a class="active" href="#">1</a>
        <a href="#">2</a>
        <a class="custom-next-icon" href="#"><i class="fa-solid fa-angles-right"></i></a>
    </div>

</div>

<?php
require_once __DIR__ . "/includes/footer.php";
require_once __DIR__ . "/includes/scripts.php";
?>