<?php require_once __DIR__ . "/includes/header.php"; ?>

<link rel="icon" href="assets/img/icon-banner.png">
<title>Template</title>

<style>
    .custom-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: auto;
        margin-top: 20px;
        margin-bottom: 20px;
        width: 95%;
        border: 2px solid black;
        background-color: white;
    }

    .custom-wrapper img {
        width: 100%;
        height: 250px;
    }

    .custom-content {
        padding: 20px 10px 10px;
    }

    .custom-content h1 {
        font-size: 20px;
        font-weight: bold;
    }

    .custom-content h2 {
        font-size: 17px;
        margin: 5px;
        font-weight: bold;
    }

    .custom-content p {
        font-size: 13px;
        font-weight: 400;
        margin: 5px;
    }

    /* SM Device */
    @media(min-width: 640px) {
        .custom-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            width: 70%;
            border: 2px solid black;
        }

        .custom-wrapper img {
            width: 100%;
            height: 280px;
        }

    }

    /* MD Device */
    @media (min-width: 768px) {

        .custom-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            width: 60%;
            border: 2px solid black;
        }

        .custom-wrapper img {
            width: 100%;
            height: 300px;
        }

    }

    /* LG Device */
    @media (min-width: 1024px) {

        .custom-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            width: 60%;
            border: 2px solid black;
        }

        .custom-wrapper img {
            width: 100%;
            height: 400px;
        }

    }

    @media (min-width: 1080px) {
        .custom-wrapper {
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            width: 80%;
            border: 2px solid black;
        }

        .custom-wrapper img {
            width: 600px;
            height: 600px;
        }

        .custom-content {
            padding: 50px 20px 0;
        }

        .custom-content h1 {
            font-size: 30px;
            font-weight: bold;
        }


        .custom-content h2 {
            font-size: 20px;
            margin: 10px;
            font-weight: bold;
        }

        .custom-content p {
            font-size: 16px;
            font-weight: 400;
            margin: 20px;
        }
    }
</style>

<?php require_once __DIR__ . "/includes/navbar.php"; ?>

<div class="custom-wrapper">
    <img src="<?=APP_ROOT?>assets/img/project/<?=$project->imagePath?>" alt="content">
    <div class="custom-content">
        <h1><?=$project->title?></h1>
        <h2>TARGET DATE START: </h2>
        <p><?=$project->dateStart?></p>
        <h2>PROJECT BUDGET: </h2>
        <p><?=$project->budget?></p>
        <h2>PROJECT DESCRIPTION: </h2>
        <p><?=$project->description?></p>
    </div>
</div>

<?php
require_once __DIR__ . "/includes/footer.php";
require_once __DIR__ . "/includes/scripts.php";
?>