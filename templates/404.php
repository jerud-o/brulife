<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= APP_ROOT ?>assets/img/error.png">
    <title>404 Not Found</title>
</head>

<style>
    .custom-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin: auto;
        margin-top: 160px;
        width: 700px;

    }

    .custom-logo-img {
        width: 200px;
        height: auto;
    }

    .custom-error-img {
        width: 150px;
        height: auto;
    }

    .custom-content h1,
    h2 {
        width: 500px;
        font-weight: bold;
    }
</style>

<body>
    <div class="custom-content">
        <!-- <img class="custom-logo-img" src="assets/img/logo-banner.png" alt="logo"> -->
        <img class="custom-error-img" src="<?= APP_ROOT ?>assets/img/error.png" alt="error">
        <h1>404. Page Not Found</h1>
        <h2>The page you're searching for might no longer exist, its name may have changed, or it is momentarily inaccessible.</h2>
    </div>
</body>

</html>