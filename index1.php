<?php
    //import library
    require_once "./vendor/autoload.php";

    //create connection with mongodb server
    $mycon=new MongoDB\client;

    //connect with particular database
    $mydb=$mycon->ccs;

    //connect with particular collection
    $mycol=$mydb->users;

    if($mycol){
        echo "connected with Collection : ".$mycol;
    }
    else{
        echo "unable to connect with mongodb";
    }
?>
