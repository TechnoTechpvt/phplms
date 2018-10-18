<?php
session_start();
include "dbcon.php";
$tot=0;
$qry="SELECT * FROM `messages` WHERE `dusername`='$_SESSION[uname]' && `read1`='no'";


$result=mysqli_query($con,$qry);

$tot=mysqli_num_rows($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> LMS </title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-book"></i> <span>LMS</span></a>
                </div>

                <div class="clearfix"></div>


                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="dispay_books_student.php"><i class="fa fa-home"></i>Search / Display Books <span class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a href='myissued_book.php'><i class="fa fa-edit"></i> My Issued Books <span class="fa fa-chevron-down"></span></a>

                            </li>
                            

                            
                            <li><a href="massage_from_libraryan.php"><i class="fa fa-table"></i>Massage <span class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a href="logout.php"><i class="fa fa-bar-chart-o"></i>Logout<span
                                    class="fa fa-chevron-down"></span></a>

                            </li>

                        </ul>
                    </div>
               
             <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                         <!-- menu profile quick info -->
                <div class="profile clearfix">
                   
                    <div class="profile_info">
                      <center> <span>Welcome,</span>
                             <h2>                       

                          <?php 
                               
                                include("dbcon.php");
                                $username=$_SESSION['uname'];
                              
                                
                                $res=mysqli_query($con,"SELECT * FROM `student_regstration` WHERE username='$username'");
                                $row=mysqli_fetch_array($res);
                            echo $row["firstname"]; echo " "; echo $row["lastname"];
                               
                                
                                
                                
                                ?></h2></center>
                    </div>
                   
                </div>
                <!-- /menu profile quick info -->

               

                </div>
           

            </div>
            
             
        </div>
        
        
        
        
        
       
        
        

        <!-- top navigation -->
        
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                 <span class="badge bg-green" onclick="window.location='massage_from_libraryan.php';"><?php  echo $tot;?> </span>
                            </a>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->