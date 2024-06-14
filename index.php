<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'API/const.php';
require_once 'API/function.php';
$data=get_data(API_URL);
$until_message=get_until_message($data["days_until"]);
//require render_template('head',$data);
render_template('head', $data);
render_template('main', array_merge(
    $data,
    ["until_message"=>$until_message]
));
//require 'templates/head.php';
//require 'sections/main.php';


?>