<?php


declare(strict_types=1);
const API_URL="https://whenisthenextmcufilm.com/api";

function get_data(string $url):array
{

//$ch =curl_init(API_URL); 
//curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
//$result=curl_exec($ch);
$result=file_get_contents($url);
$data=json_decode($result,true);
//curl_close($ch);
return $data;
}

function get_until_message(int $days): string
{
    return match(true){
        $days == 0 =>"Hoy se estrena! 🙂 🙋 ",
        $days == 1 =>"Mañana se estrena! 🦖  ",
        $days < 7 =>"Esta semana se estrena! 🎟 ✈ 🛬  ",
        $days <30  =>"Este mes se estrena... 🗑 ⏰ ",
        default => "$days días para el estreno ⚔ 🔫 🗡 🗡 🗡  "
        };


}



?>