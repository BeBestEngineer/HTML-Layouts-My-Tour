<?php
header('Content-type: text/html; charset=utf-8');
error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE|E_ALL);
ini_set('display_errors', 1);




//session_start();

if ( isset( $_POST['Button_pressed'] ) ) {
//    $_SESSION = $_POST;
}




if ( isset( $_GET['page'] ) ) {
    
    require_once 'modules/_modules-data/_modules-data-list.php';
    
    require_once 'pages/page-head.php';
    require_once 'pages/page-wrapper.php';
    require_once 'pages/page-end.php';
    
} else {
    header('Location: '.$_SERVER['REQUEST_URI'].'?page=interests');
}




//$_SESSION[] = '';


?>
