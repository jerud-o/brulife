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
                <li><a href="<?= APP_ROOT . "projects?p=1&filter=all" ?>" <?php if ($_GET['filter'] == "all") : ?>class="active"<?php endif ?>>Show All</a></li>
                <li><a href="<?= APP_ROOT . "projects?p=1&filter=subdivision" ?>" <?php if ($_GET['filter'] == "subdivision") : ?>class="active"<?php endif ?>>Subdivision</a></li>
                <li><a href="#">Business Buidling</a></li>
                <li><a href="#">Hospital</a></li>
                <li><a href="#">Malls</a></li>
                <li><a href="#">Industrial</a></li>
                <li><a href="#">Agricultural</a></li>
            </ul>
        </div>
    </div>
    <div class="card-flex-custom">
        <div id="gallery" class="flex flex-wrap flex-col lg:flex-row items-center justify-center">
            <?php foreach ($projectArrayFinal as $project) : ?>
                <div class="card-custom">
                    <div class="card-img-custom">
                        <img src="<?= APP_ROOT ?>assets/img/project/<?= $project->imagePath ?>" alt="img">
                    </div>
                    <div class="card-content-custom">
                        <h3><?= $project->title ?></h3>
                        <?php foreach ($project->tags as $tag) : ?>
                            <p><?= ucwords($tag) ?></p>
                        <?php endforeach ?>
                        <a href="<?= APP_ROOT ?>project/<?= base64_encode($project->id) ?>"><button class="btn-custom">See More</button></a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="custom-pagination">
        <?php if ($backValue === 0) : ?>
            <a class="custom-previous-icon disabled" href="#"><i class="fa-solid fa-angles-left"></i></a>
        <?php else : ?>
            <a class="custom-previous-icon" href="<?= APP_ROOT . "projects?p=" . $backValue . "&filter=" . $_GET['filter'] ?>"><i class="fa-solid fa-angles-left"></i></a>
        <?php endif ?>
        <?php for ($i = 1; $i <= $pages; $i++) : ?>
            <a href="<?= APP_ROOT . "projects?p=" . $i . "&filter=" . $_GET['filter'] ?>" class="<?php if ($i == $_GET['p']) { echo "active"; } ?>"><?= $i ?></a>    
        <?php endfor ?>
        <a class="custom-next-icon" href="#"><i class="fa-solid fa-angles-right"></i></a>
    </div>
</div>

<?php
require_once __DIR__ . "/includes/footer.php";
require_once __DIR__ . "/includes/scripts.php";
?>