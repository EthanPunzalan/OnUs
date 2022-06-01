<?php

    $db = mysqli_connect("localhost","root","","onus");
        if(!$db){
            die("Connection Failed".mysqli_connect_error());
        }else{
            //echo "Connection Made";
        }