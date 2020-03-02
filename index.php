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

    if ($_SESSION['user_name']!="" && $_SESSION['user_id']!="" ) {
        
        //syc is keyword for menu
        if($_GET['syc']!=""){

            //define GET value with menu variable
            $menu = $_GET['syc'];

            //arrange menu number with their page display
            switch ($menu) {
                
                // Donator Part 1 - 20
                case 1:
                    $filepage = "donator/donator_list.php";
                    break;
                case 2:
                    $filepage = "donator/donator_detail.php";
                    break;
                case 3:
                    $filepage = "donator/donator_edit.php";
                    break;
                case 4:
                    $filepage = "donator/donator_add.php";
                    break;
                
                // Donator Part End
                    
                // Event Part 30 - 50
                case 30:
                    $filepage = "event/event_list.php";
                    break;
                case 31:
                    $filepage = "event/event_detail.php";
                    break;
                case 32:
                    $filepage = "event/event_add.php";
                    break;
                case 33:
                    $filepage = "event/event_blast.php";
                    break;

                // Donator Part End

                // User Part 100 - 120
                case 100:
                    $filepage = "user/profile.php";
                    break;
                case 101:
                    $filepage = "user/staff_list.php";
                    break;
                case 102:
                    $filepage = "user/staff_add.php";
                    break;

                // User Part End

                default:
                    $filepage = "dashboard.php";
                    break;
            }

        }else{
            //set dashboard as default page.
            $filepage = "dashboard.php";
        }

    }else{

        header("Location: logout.php"); 

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
