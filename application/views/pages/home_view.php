<html>
<head>
    <title><?php echo 'Mdvd Cafe'.$title; ?></title>
    
    <!-- slider files -->

    <link rel="stylesheet" type="text/css" href="bootstrap/css/slider.css">
    <script type="text/javascript" src="bootstrap/js/modernizr.custom.28468.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>

    <!-- end of slider files -->
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    <link rel="shortcut icon" href="bootstrap/img/favicon.png">
    
</head>

<body>
<!--------------------------------NAVIGATION------------------------------------------------------->
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="brand" href="">M DVD Cafe <i class="icon-facetime-video"></i></a>
                             <ul class="nav navbar">
                                <li><a href="<?php echo base_url(); ?>"><i class="icon-home"></i> Home</a></li>
                                <li><a href="<?php echo base_url('mdvd/room'); ?>"><i class="icon-table"></i> Room Rates</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="icon-th-list"></i> Services <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">                    
                                        <li><a href="<?php echo base_url('mdvd/movies'); ?>"><i class="icon-film"></i> Movies</a></li>
                                        <li><a href="<?php echo base_url('mdvd/karaoke'); ?>"><i class="icon-music"></i> Karaoke</a></li> 
                                    </ul>
                                </li>  
                                <li><a href="<?php echo base_url('mdvd/about'); ?>"><i class="icon-list-ul"></i> About</a></li>
                                <li><a href="<?php echo base_url('mdvd/contact'); ?>"><i class="icon-phone"></i> Contact</a></li> 
                            </ul>
                            
                            <?php
                                if($this->session->userdata('logged_in')) {
                                    echo '<ul class="nav pull-right">
                                        <li><a href=""><i class="icon-user"></i> Welcome!</a></li>
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
    <!-------------------------------END OF NAVIGATION---------------------->
    
    
    <!--------------------------------CONTENT--------------------------------->
    <div class="container">
        <div class="row">
            <div class="span12">
                
                <div id="da-slider" class="da-slider">
                    
                    <div class="da-slide">
                        <h2>Watch top-rated movies!</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <a href="#" class="da-link">Go</a>
                        <div class="da-img"><img src="bootstrap/img/movies/topmovies.png" alt="top movies" /></div>
                    </div>
                    
                    
                    <div class="da-slide">
                        <h2>Unleash your singing prowess!</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="da-link">Go</a>
                        <div class="da-img"><img src="bootstrap/img/karaoke.jpg" alt="karaoke" /></div>
                    </div>
                    
                    <div class="da-slide">
                        <h2>About us</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="da-link">Read more</a>
                        <div class="da-img"><img src="bootstrap/img/mdvd/m1.jpg" alt="m dvd" /></div>
                    </div>
        
                    <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav>
                </div>
                
                
            </div> <!-- end of span12 tag-->
        </div> <!-- end of slider row tag-->
        
        <div class="row">
            <div class="span12">
                <h3>M DVD Cafe</h3> <hr/>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus, sapien nec dignissim porta.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus, sapien nec dignissim porta.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus, sapien nec dignissim porta.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus, sapien nec dignissim porta.
                </p>
                
            </div> <!-- end of span12 tag-->
        </div> <!-- end of row tag-->  <br/><br/><br/>
              
        <div class="row">
            <div class="span12">
                <h3>Take a peek!</h3> <hr/>
                
                <ul class="thumbnails">
                    
                  <li class="span3">
                    <a href="#" class="thumbnail">
                      <img src="bootstrap/img/mdvd/m2.jpg" alt="">
                    </a>
                  </li>
                
                <li class="span3">
                    <a href="#" class="thumbnail">
                      <img src="bootstrap/img/mdvd/m3.jpg" alt="a">
                    </a>
                  </li>
                
                <li class="span3">
                    <a href="#" class="thumbnail">
                      <img src="bootstrap/img/mdvd/m4.jpg" alt="">
                    </a>
                  </li>
                
                <li class="span3">
                    <a href="#" class="thumbnail">
                      <img src="bootstrap/img/mdvd/m5.jpg" alt="">
                    </a>
                  </li>
                 
                </ul>
                
            </div> <!-- end of span12 tag-->
        </div> <!-- end of row tag--> <br/><br/><br/> 
        
        <div class="row">
            <div class="span12">
                <h3>New Movies</h3> <hr/>
            </div> <!-- end of span12 tag-->
            
            <div class="span2">
                <div class="box">
                    <img src="bootstrap/img/movies/insidious.jpg" class="img-circle"/> <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>                  
                </div> <!-- end of box tag-->
            </div> <!-- end of span tag-->
            <div class="span2">
                <div class="box">
                    <img src="bootstrap/img/movies/ironman3.jpg" class="img-circle"/> <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>                   
                </div> <!-- end of box tag-->
            </div> <!-- end of span tag-->
            <div class="span2">
                <div class="box">
                    <img src="bootstrap/img/movies/hangover.jpg" class="img-circle"/> <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>                  
                </div> <!-- end of box tag-->
            </div> <!-- end of span tag-->
            <div class="span2">
                <div class="box">
                    <img src="bootstrap/img/movies/smurfs.jpg" class="img-circle"/> <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>                  
                </div> <!-- end of box tag-->
            </div> <!-- end of span tag-->
            <div class="span2">
                <div class="box">
                    <img src="bootstrap/img/movies/worldwarz.jpg" class="img-circle"/> <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>                  
                </div> <!-- end of box tag-->
            </div> <!-- end of span tag-->
            <div class="span2">
                <div class="box">
                    <img src="bootstrap/img/movies/gijoe.jpg" class="img-circle"/> <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>                  
                </div> <!-- end of box tag-->
            </div> <!-- end of span tag-->
            
        </div> <!-- end of row tag-->
        
        <div class="row">
            
            <div class="span12">
                <h3>Top Movies</h3> <hr/>
            </div> <!-- end of span12 tag-->
            
            <div class="span2">
                <div class="box">
                    <img src="bootstrap/img/movies/gijoe.jpg" class="img-circle"/> <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>                     
                </div> <!-- end of box tag-->
            </div> <!-- end of span tag-->
            <div class="span2">
                <div class="box">
                    <img src="bootstrap/img/movies/worldwarz.jpg" class="img-circle"/> <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>                   
                </div> <!-- end of box tag-->
            </div> <!-- end of span tag-->
            <div class="span2">
                <div class="box">
                    <img src="bootstrap/img/movies/smurfs.jpg" class="img-circle"/> <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>                  
                </div> <!-- end of box tag-->
            </div> <!-- end of span tag-->
            <div class="span2">
                <div class="box">
                    <img src="bootstrap/img/movies/hangover.jpg" class="img-circle"/> <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>                    
                </div> <!-- end of box tag-->
            </div> <!-- end of span tag-->
            <div class="span2">
                <div class="box">
                    <img src="bootstrap/img/movies/ironman3.jpg" class="img-circle"/> <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>                   
                </div> <!-- end of box tag-->
            </div> <!-- end of span tag-->
            <div class="span2">
                <div class="box">
                    <img src="bootstrap/img/movies/insidious.jpg" class="img-circle"/> <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>                   
                </div> <!-- end of box tag-->
            </div> <!-- end of span tag-->
            
        </div> <!-- end of row tag-->

    </div> <!-- end of container tag-->
    
<div class="row"><br><br></div>

<div class="footer">    
    <div class="container">
        
        <div class="row"> 
            <div class="span8">
                <h4>M DVD Cafe</h4> <hr/>
                
                <p> <i class="icon-home"></i> &nbsp; Location: Salinas Drive, Lahug
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <i class="icon-phone"></i> &nbsp; Phone: 1234567890 </p>
                <p> <i class="icon-envelope"></i> &nbsp; Email: xanpatan@gmail.com
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <i class="icon-globe"></i> &nbsp; Web: <a href=" ">www.mdvdmoviehouse.com</a></p>
                
            </div>  
            
            <div class="span4">
                <h4>Get Social</h4> <hr/>
                <div class="social">
                    <a href="#"><i class="icon-twitter"></i></a>
                    <a href="#"><i class="icon-google-plus"></i></a>
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-linkedin"></i></a>
                </div> <!-- end of social div tag -->
            </div>
            
        </div> <!-- end of row tag-->
        
        <div class="row">
            <div class="span12"> 
                <hr/>
                <p class="pull-right"><a>a DBMS 2 project &copy; Team Ascend 2014</a></p>
            </div>
        </div>
        
    </div> <!-- end of container tag-->
</div> <!-- end of footer tag-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery.cslider.js"></script>
<script type="text/javascript">
    $(function() {
    
        $('#da-slider').cslider({
            autoplay    : true,
            bgincrement    : 450
        });
    
    });
</script>
</body>
</html>