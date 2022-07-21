<?php require_once __DIR__ . "/../includes/header.php"; ?>

<title>Devine Chemical Resources</title>

<style>
    .custom-content-wrapper {
        margin: auto;
        margin-top: 20px;
        margin-bottom: 20px;
        width: 70%;
    }

    .custom-img {
        margin: auto;
        width: 1000px;
        height: 300px;
    }

    .custom-img img {
        width: 1000px;
        height: 300px;
    }

    .custom-content {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 50px;
    }

    .custom-content img {
        width: 400px;
        height: 400px;
    }

    .custom-content-text {
        display: flex;
        flex-direction: column;
        margin: 20px;
    }

    .custom-content-text h3 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .custom-content-text p {
        font-size: 16px;
        font-weight: 500;
        margin-left: 20px;
        margin-bottom: 20px;
    }

    .custom-btn {
        display: flex;
        margin: auto;
    }
    .custom-btn button{
        border: 2px solid black;
        padding: 10px 20px;
    }

    .custom-btn button:hover{
        color: white;
        background-color: #7df69f;
    }
</style>

<?php require_once __DIR__ . "/../includes/navbar.php"; ?>

<div class="custom-content-wrapper">
    <div class="custom-img">
        <img src=<?= APP_ROOT . "/assets/img/ej-yao-scenic.jpg" ?> alt="custom-banner">
    </div>
    <div class="custom-content">
        <img src=<?= APP_ROOT . "/assets/img/dcr.jpg" ?> alt="custom-img">
        <div class="custom-content-text">
            <h3>ABOUT US</h3>
            <p>Devine Chemical Resources provides customer-centric technology solutions and services through the best environment friendly practices. The only company that provides such a wide range of IT solutions and services expanded and penetrated.</p>
            <p>Devine Chemical Resources commits to provide innovative, efficient, and quality products and services. Through a system of quality service, innovations and commitment, we will help each customer meet their immediate requirement to their satisfaction.</p>
            <p>We envision to maintain a steady but profitable growth based on our core values by providing value for money to the clients and communities that we serve through our people.</p>
            <div class="custom-btn">
                <button>Visit Devine Chemical Resources</button>
            </div>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . "/../includes/footer.php";
require_once __DIR__ . "/../includes/scripts.php";
?>