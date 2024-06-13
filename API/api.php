
<?php
const API_URL="https://whenisthenextmcufilm.com/api";



$ch =curl_init(API_URL); 
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);
$data=json_decode($result,true);
curl_close($ch);


?>