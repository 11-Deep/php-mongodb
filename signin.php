<?php
    //import library
    require_once "./vendor/autoload.php";

    // isset matlab submit btn pa click hua hai to uska filed sa data get karga
    if(isset($_POST['l_submit'])){
        $email=$_POST['lEmail'];
        $pass=$_POST['lPassword'];
        // echo ($email."<br>");
        // echo ($pass);


        $rec = array(

            "Email"=>$email,
            "Password"=>$pass
        );

        $mycon = new MongoDB\Client;
        $mydb  = $mycon->ccs;
        $mycol = $mydb->users;

        $insert = $mycol->find($rec);

        if($insert){
            echo "login Successfully";
        }
        else{
            echo "Error occurred ";
        }

    }

    
?>
