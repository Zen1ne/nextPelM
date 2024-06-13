<?php 
$name="Brandon";
$isDev=true;
$age=29;
$newAge=$name;
define('LOGO_URL','../shar.png');




?>

<img src="<?=LOGO_URL?>" alt="PHP LOGO" width="200">
<h1>

<?=
"Hola ".$name
." con la edad de "
.$age
.'. :)'

?>



<?php
$best=["hytml","php","java"];
$best[]="nose";
$best[]="No se";

$person=[
    "name"=>"Brandon",
    "age"=>23,
    "isDev"=>true,
    "languages"=>["java","jaca","jama"],
];
$person ["name"]="Yo";
$person ["languages"][]="jacas";




?>

</h1>
<ul>
    <?php foreach($best as $key=> $bes): ?>
        <li><?=$key." ".$bes?></li>
        <?php endforeach ?>
        <ul><?php foreach($person ["languages"]as $key=> $persi): ?>
        <li><?=$key." ".$persi?></li>
        <?php endforeach ?>

        </ul>

</ul>
<ul>
<?php foreach($person as $key=> $per): ?>
        <li><?=$key ." ".$per ?></li>
        <?php endforeach ?>

</ul>




<style>
    :root{
        color-scheme: light dark;
    }
    body{
        display:grid;
        place-content: center;


    }




</style>