<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SyriaCare Admin</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        session_start();
        include('header_link.php'); //contain link for styling
    
    ?>

    <style>
   
    </style>
</head>

<!-- Menu checking php -->
<?php

    //syc is keyword for menu
    if($_GET['syc']!=""){
        
        //define GET value with menu variable
        $menu = $_GET['syc'];

        //arrange menu number with their page display
        switch ($menu) {
            case 1:
                $filepage = "dashboard.php";
                break;
            
            case 2:
                $filepage = "dashboard.php";
                break;
            
            default:
                $filepage = "dashboard.php";
                break;
        }

    }else{
        //set dashboard as default page.
        $filepage = "dashboard.php";
    }


?>
<!-- End Menu checking php -->

<body>
    <!-- Left Panel -->
    <?php include('left_navigation.php'); ?>
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include('top_navigation.php'); ?>
        <!-- /#header -->

        <!-- Content -->
        <div class="content">

            
            <?php include($filepage); //display page that set by menu number above ?>

        </div>
        <!-- /.content -->

        <div class="clearfix"></div>

        <!-- Footer -->
        <?php include('footer.php'); ?>
        <!-- /.site-footer -->
        
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <?php include('script_link.php'); //contained link for scripting  ?>

</body>
</html>
