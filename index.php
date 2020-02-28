<?php

    session_start();

    if ($_SESSION['username']!="" && $_SESSION['userid']!="" ) {
        
        header("Location: dashboard.php"); 

    }else{

        header("Location: login.php"); 

    }




?>