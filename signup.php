<?php
    //import library
    require_once "./vendor/autoload.php";

    // isset matlab submit btn pa click hua hai to uska filed sa data get karga
    if(isset($_POST['r_submit'])){
        $email=$_POST['rEmail'];
        $pass=$_POST['rPassword'];
        $cPass=$_POST['crPassword'];
        // echo ($email."<br>");
        // echo ($pass."<br>");
        // echo ($cPass);

        $rec = array(

            "Email"=>$email,
            "Password"=>$pass,
            "Cpass"=>$cPass
        );

        $mycon = new MongoDB\Client;
        $mydb  = $mycon->ccs;
        $mycol = $mydb->users;

        $insert = $mycol->insertOne($rec);

        if($insert){
            echo "Data Inserted";
        }
        else{
            echo "Error occurred ";
        }


    }

    
?>
