<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="icon" href="assets/img/forbidden.png">
    <title>403 Fobidden</title>
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

    .custom-forbidden-img {
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
        <img src="<?= APP_ROOT ?>assets/img/forbidden.png" alt="logo">
        <h1>FORBIDDEN</h1>
        <h2>You don't have permission to access / on this server.</h2>
    </div>
</body>

</html>