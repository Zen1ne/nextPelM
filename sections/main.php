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