<?php

require_once 'config/database.php';
require_once 'App/controller/User.php';
require_once 'App/controller/BaseControlle.php';

$UserControl = new \App\controller\UserController($conn);

define('BASE_BATH','/Darrebni/HOme%20Task/user-mvcacc/');

// $action = isset($_GET['action']) ? $_GET['action'] : 'index';
$url =  $_SERVER['REQUEST_URI'];


$BATH = BASE_BATH;
echo (  strpos($url,BASE_BATH.'edit') );
switch ($url){
    case $BATH;
        $UserControl->index();
    break;

    case ( strpos($url,BASE_BATH.'delete') === 0);
    echo "hi";
    $UserControl->delete();
    break;  
    case  ( strpos($url,BASE_BATH.'edit') === 0);
    echo "hi0";
    $UserControl->edit();
    break;  
    case  ( strpos($url,BASE_BATH.'update') === 0);
    echo "hpwww";
    $UserControl->update();
    break;  
    case  $BATH.'create';
    $UserControl->create();
    break;  
}