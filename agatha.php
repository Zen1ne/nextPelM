<?php

include 'API/function.php';
include 'API/const.php';
$data=get_data(API_URL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proximo proyecto de Marvel: <?=$data["following_production"]["title"]?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section>
    <img width="300" src="<?=$data["following_production"]["poster_url"]?> " alt="<?=$data["following_production"]["title"]?>"style="border-radius:19px " >
    </section>
    <h3><?=$data["following_production"]["title"]?></h3>
    <p><?=$data["following_production"]["overview"]?></p>
    <h2><a href="index.php"><?=$data["title"]?></a> Faltan <?=$data["days_until"]?> días</h2>
    
    
    
</body>
</html>