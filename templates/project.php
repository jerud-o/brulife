<?php require_once __DIR__ . "/includes/header.php"; ?>

<script src="assets/js/dropdown.js"></script>
<link rel="stylesheet" href="assets/css/project.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="icon" href="assets/img/icon-banner.png">
<title>Upcoming Projects</title>

<?php require_once __DIR__ . "/includes/navbar.php"; ?>

<div style="background-image:url('assets/img/project/bg-img-02.jpg')" class="custom-content-bg">
    <div class="lg:hidden custom-dropdown">
        <button onclick="myFunction()" class="custom-dropbtn"><?= ucwords($_GET['filter']) ?></button>
        <div id="myDropdown" class="custom-dd-content">
            <a href="<?= APP_ROOT . "projects?p=1&filter=all" ?>" <?php if ($_GET['filter'] == "all") : ?>class="m-active" <?php endif ?>>
                <li>Show All</li>
            </a>
            <a href="<?= APP_ROOT . "projects?p=1&filter=subdivision" ?>" <?php if ($_GET['filter'] == "subdivision") : ?>class="m-active" <?php endif ?>>
                <li>Subdivision</li>
            </a>
            <a href="<?= APP_ROOT . "projects?p=1&filter=business bldg." ?> " <?php if ($_GET['filter'] == "business bldg.") : ?>class="m-active" <?php endif ?>>
                <li>Business Bldg.</li>
            </a>
            <a href="<?= APP_ROOT . "projects?p=1&filter=hospital" ?> " <?php if ($_GET['filter'] == "hospital") : ?>class="m-active" <?php endif ?>>
                <li>Hospital</li>
            </a>
            <a href="<?= APP_ROOT . "projects?p=1&filter=malls" ?> " <?php if ($_GET['filter'] == "malls") : ?>class="m-active" <?php endif ?>>
                <li>Malls</li>
            </a>
            <a href="<?= APP_ROOT . "projects?p=1&filter=industrial" ?> " <?php if ($_GET['filter'] == "industrial") : ?>class="m-active" <?php endif ?>>
                <li>Industrial</li>
            </a>
            <a href="<?= APP_ROOT . "projects?p=1&filter=agricultural" ?> " <?php if ($_GET['filter'] == "agricultural") : ?>class="m-active" <?php endif ?>>
                <li>Agricultural</li>
            </a>
        </div>
    </div>
    <div class="p-10 hidden lg:block">
        <div class="w-[80%] lg:w-[97%] xl:w-[80%] m-auto">
            <ul class="filter-list-custom">
                <li><a href="<?= APP_ROOT . "projects?p=1&filter=all" ?>" <?php if ($_GET['filter'] == "all") : ?>class="active" <?php endif ?>>Show All</a></li>
                <li><a href="<?= APP_ROOT . "projects?p=1&filter=subdivision" ?>" <?php if ($_GET['filter'] == "subdivision") : ?>class="active" <?php endif ?>>Subdivision</a></li>
                <li><a href="<?= APP_ROOT . "projects?p=1&filter=business bldg." ?> " <?php if ($_GET['filter'] == "business bldg.") : ?>class="active" <?php endif ?>>Business Bldg.</a></li>
                <li><a href="<?= APP_ROOT . "projects?p=1&filter=hospital" ?> " <?php if ($_GET['filter'] == "hospital") : ?>class="active" <?php endif ?>>Hospital</a></li>
                <li><a href="<?= APP_ROOT . "projects?p=1&filter=malls" ?> " <?php if ($_GET['filter'] == "malls") : ?>class="active" <?php endif ?>>Malls</a></li>
                <li><a href="<?= APP_ROOT . "projects?p=1&filter=industrial" ?> " <?php if ($_GET['filter'] == "industrial") : ?>class="active" <?php endif ?>>Industrial</a></li>
                <li><a href="<?= APP_ROOT . "projects?p=1&filter=agricultural" ?> " <?php if ($_GET['filter'] == "agricultural") : ?>class="active" <?php endif ?>>Agricultural</a></li>
            </ul>
        </div>
    </div>
    
    <?php if (empty($projectArrayFinal)) : ?>
        <div class="flex justify-center items-center text-[70px] text-white font-bold p-[50px]">
            <p>No Items Found.</p>
        </div>
    <?php else : ?>
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
                <a class="custom-previous-icon disabled " href="#"><i class="fa-solid fa-angles-left"></i></a>
            <?php else : ?>
                <a class="custom-previous-icon" href="<?= APP_ROOT . "projects?p=" . $backValue . "&filter=" . $_GET['filter'] ?>"><i class="fa-solid fa-angles-left"></i></a>
            <?php endif ?>
            
            <?php for ($i = 1; $i <= $pages; $i++) : ?>
                <a href="<?= APP_ROOT . "projects?p=" . $i . "&filter=" . $_GET['filter'] ?>" class="<?php if ($i == $_GET['p']) { echo "active"; } ?>"><?= $i ?></a>
            <?php endfor ?>

            <?php if ($nextValue > $pages) : ?>
                <a class="custom-next-icon disabled" href="#"><i class="fa-solid fa-angles-right"></i></a>
            <?php else : ?>
                <a class="custom-next-icon" href="<?= APP_ROOT . "projects?p=" . $nextValue . "&filter=" . $_GET['filter'] ?>"><i class="fa-solid fa-angles-right"></i></a>
            <?php endif ?>
        </div>
    <?php endif ?>


</div>

<?php
require_once __DIR__ . "/includes/footer.php";
require_once __DIR__ . "/includes/scripts.php";
?>