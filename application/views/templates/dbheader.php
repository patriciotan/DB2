<html>
<head>
    <title><?php echo 'Mdvd Cafe'.$title; ?></title>
    
    <!-- slider files -->

    <link rel="stylesheet" type="text/css" href="../bootstrap/css/slider.css">
    <link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap3.css">
    <script type="text/javascript" src="../bootstrap/js/modernizr.custom.28468.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>

    <!-- end of slider files -->
    
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
    <link rel="shortcut icon" href="../bootstrap/img/favicon.png">
    
</head>

<body>

    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="brand" href="">Mdvd Cafe <i class="icon-facetime-video"></i></a>
                             <ul class="nav navbar">
                                <li><a href="<?php echo base_url('mdvd/hashtagadmin'); ?>"><i class="icon-home"></i> Home</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="icon-list-ul"></i> Users <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">                    
                                        <li><a href="<?php echo base_url('mdvd/db_customers'); ?>"><i class="icon-table"></i> Customers</a></li> 
                                        <li><a href="<?php echo base_url('mdvd/db_employees'); ?>"><i class="icon-table"></i> Employees</a></li> 
                                    </ul>
                                </li>  
                                <li><a href="<?php echo base_url('mdvd/db_movies'); ?>"><i class="icon-table"></i> Movies</a></li> 
                                <li><a href="<?php echo base_url('mdvd/db_transactions'); ?>"><i class="icon-table"></i> Transactions</a></li> 
                                <li><a href="<?php echo base_url('mdvd/db_rooms'); ?>"><i class="icon-table"></i> Rooms</a></li> 
                            </ul>
                            
                            <?php
                                if($this->session->userdata('logged_in')) {
                                    echo '<ul class="nav pull-right">
                                        <li><a href=""><i class="icon-user"></i> Admin!</a></li>
                                        <li><a href="'.base_url("mdvd/logout").'"><i class="icon-signout"></i> Sign Out</a></li>
                                    </ul>';
                                }
                                else {
                                    echo '<ul class="nav pull-right">
                                        <li><a href="'.base_url("mdvd/login").'"><i class="icon-signin"></i> Sign In</a></li>
                                        <li><a href="'.base_url("mdvd/signup").'"><i class="icon-edit"></i> Sign Up</a></li>
                                    </ul>';
                                }
                            ?>
                            
                        </div> <!-- end of navbar-inner tag-->
                    </div> <!-- end of nav bar tag-->
                </div> <!-- end of span12 tag-->
            </div> <!-- end of row tag-->
        </div> <!-- end of container tag-->
    </div> <!-- end of navigation tag-->