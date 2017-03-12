<?php

//echo '<h2>POST<h2>';
//
//var_dump( $__POST );
//
//
//
//echo '<h2>GET<h2>';
//
//var_dump( $__GET );



$filename = "interest-form-result.txt";
$separator = '  -  ';


  {

    $name = htmlspecialchars($_POST['selection-name']);
    $city = htmlspecialchars($_POST['selection-client-city']);

    
    $arr = array( $name, $city );
    $new_message = implode($separator, $arr) . "\r\n";


    $fp = fopen($filename,"a+");
    fwrite($fp, $new_message);
    fclose($fp);

  }






?>