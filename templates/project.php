<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d9b0f2969c.js" crossorigin="anonymous"></script>
    <script src="assets/js/dropdown.js"></script>
    <link rel="stylesheet" href="assets/css/project.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Upcoming Projects</title>
</head>

<body>

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

    <div class="m-10 hidden lg:block">
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
                <button class="btn-custom">See More</button>
            </div>
        </div>

        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/002.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>BRU LIFE TWIN TOWER BUSINESS CENTER</h3>
                <p>BUSINESS BLDG.</p>
                <button class="btn-custom">See More</button>
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
                <button class="btn-custom">See More</button>
            </div>
        </div>

        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/004.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>KLAIRES VILLE SUBDIVISION</h3>
                <p>SUBDIVISION</p>
                <button class="btn-custom">See More</button>
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
                <button class="btn-custom">See More</button>
            </div>
        </div>

        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/006.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>BRU LIFE IP TOWER</h3>
                <p>BUSINESS BLDG.</p>
                <button class="btn-custom">See More</button>
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
                <button class="btn-custom">See More</button>
            </div>
        </div>

        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/008.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>RICEFIELD</h3>
                <p>AGRICULTURAL</p>
                <button class="btn-custom">See More</button>
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
                <button class="btn-custom">See More</button>
            </div>
        </div>

        <div class="card-custom">
            <div class="card-img-custom">
                <img src="assets/img/project/010.jpg" alt="img">
            </div>
            <div class="card-content-custom">
                <h3>CATTLE</h3>
                <p>AGRICULTURAL</p>
                <button class="btn-custom">See More</button>
            </div>
        </div>
    </div>

</body>

</html>