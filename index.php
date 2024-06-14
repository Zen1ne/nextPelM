<?php

require 'API/function.php';
$data=get_data(API_URL);
$untilMessage=get_until_message($data["days_until"]);
?>

<head>
    <meta charset="UTF-8"/>
    <title>La proxima pelicula de Marvel</title>
    <meta name="description" content="La proxima pelicula de marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
  
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>
</head>
<main>
    
    
    <section>
        <img width="300" src="<?=$data["poster_url"]?> " alt="<?=$data["title"]?>" style="border-radius:16px"/>
    </section>
    <hgroup>
        <h3> <?=$data["title"];?> <?=$untilMessage?></h3>
        <p>Fecha de estreno<?=$data["release_date"]?></p>
        <p>La siguiente es
            <a href="agatha.php"><?=$data["following_production"]["title"]?></a></p>

    </hgroup>

</main>


