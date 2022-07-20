<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Template</title>
</head>
<style>
.custom-wrapper{
    display: flex;
    flex-direction: row;
    justify-content: center;
    margin: auto;
    margin-top: 70px;
    width: 70%;
    border: 2px solid black;
}

.custom-wrapper img{
    width: 600px;
    height: 600px;
}

.custom-content{
    padding: 50px 20px 0;    
}

.custom-content h1{
    font-size: 30px;
    font-weight: bold;
}

.custom-content p{
    font-size: 20px;
    margin: 20px;
}

</style>
<body>
    <div class="custom-wrapper">
        <img src="assets/img/project/001.png" alt="content">
        <div class="custom-content">
            <h1>LOREM</h1>
            <p><b>TARGET DATE START: </b></p>
            <p>MM/DD/YYYY</p>
            <p><b>PROJECT BUDGET: </b></p>
            <p>&#8369; ###,###,###.##</p>
            <p><b>PROJECT DESCRIPTION:</b></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nam itaque adipisci error eligendi eos enim dolorem aut obcaecati quo, dolorum consequatur nemo odio quam, magni officiis atque iusto ipsum.</p>
        </div>
    </div>
</body>

</html>