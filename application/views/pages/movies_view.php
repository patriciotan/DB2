<html>
<head>
<title><?php echo 'Mdvd Cafe'.$title; ?></title>
<!-- slider files -->
<link rel="stylesheet" type="text/css" href="../bootstrap/css/slider.css">
<link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap3.css">
<script type="text/javascript" src="../bootstrap/js/modernizr.custom.28468.js"></script>
<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
<!-- end of slider files -->
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap3.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
<link rel="shortcut icon" href="../bootstrap/img/favicon.png">
</head>
<!------------------------------------------------------------CONTENT--------------------------------------------------------------------------->       
        <div class="container" style="background-color:#FFF">
        	
   <!----------------SEARCH--------------------------------->
            
            <div class="row panel">
            	<div class="panel-body col-lg-offset-3 col-lg-6">
                	<label>Search Movie</label>
          			<div class="input-group">
            			<input type="text" class="form-control">
            				<span class="input-group-btn">
              					<button class="btn btn-default" type="button">Search</button>
            				</span>
          			</div>
        		</div>
            </div>
			
            	
   <!-----------------------------------LEFT NAV---------------------------------------->     
        <div class="row"> <!---start of whole row--->
                <div class="col-lg-3">
                    <ul class="nav nav-pills nav-stacked">
  						<li class="active"><a href="#" class="btn-danger">All</a></li>
  						<li><a href="#">Action</a></li>
                        <li><a href="#">Animation</a></li>
  						<li><a href="#">Comedy</a></li>
                        <li><a href="#">Fantasy</a></li>
                        <li><a href="#">Horror</a></li>
                        <li><a href="#">Drama</a></li>
					</ul>
                </div>
                
                
   <!--------------------------------RIGHT SIDE---------------------------------------------->
                
                
                
                <div class="col-lg-9"><!---start of column--->
                
                <div class="panel panel-default">
                
        			<div class="panel-heading">
          				<h3 class="panel-title">Movies</h3>
       				</div>
                    
                    <div class="panel-body">
                    
                    
					<p><div class="row">
  						<div class="col-sm-6 col-md-3"><!---start--->
                            <div class="thumbnail"><!--thumbnail--->
                                  <img src="../bootstrap/img/movies/hangover.jpg" style="width:170px; height:250px;">
                                      <div class="caption">
                                        <h4>Hangover 3</h4>                                                           
                                            <form action="<?php echo base_url('mdvd/reserve_movie'); ?>" method="post">   
                                                <input type="hidden" name="title" value="Hangover 3">
                                                <?php  
                                                    if($reserved) {
                                                        echo "<button class='btn btn-success disabled' type='submit'>Reserve</button>";
                                                    }
                                                    else {
                                                        echo "<button class='btn btn-success' type='submit'>Reserve</button>";
                                                    }
                                                ?>
                                            </form>
                                      </div>
    						</div><!---thumbnail--->
  						</div><!---end--->
                        
                        <div class="col-sm-6 col-md-3"><!---start--->
    						<div class="thumbnail"><!--thumbnail--->
      							<img src="../bootstrap/img/movies/manoftaichi.jpg" style="width:170px; height:250px;">
      								<div class="caption">
        								<h4>Man of Taichi</h4>                                                 
                                            <form action="<?php echo base_url('mdvd/reserve_movie'); ?>" method="post">   
                                                <input type="hidden" name="title" value="Man of Taichi">
                                                <?php
                                                    if($reserved) {
                                                        echo "<button class='btn btn-success disabled' type='submit'>Reserve</button>";
                                                    }
                                                    else {
                                                        echo "<button class='btn btn-success' type='submit'>Reserve</button>";
                                                    }
                                                ?>
                                            </form>
                                      </div>
    						</div><!---thumbnail--->
  						</div><!---end--->
                        
                        
                        <div class="col-sm-6 col-md-3"><!---start--->
    						<div class="thumbnail"><!--thumbnail--->
      							<img src="../bootstrap/img/movies/ironman3.jpg" style="width:170px; height:250px;">
      								<div class="caption">
        								<h4>Ironman 3</h4>                                                          
                                            <form action="<?php echo base_url('mdvd/reserve_movie'); ?>" method="post">   
                                                <input type="hidden" name="title" value="Ironman 3">
                                                <?php
                                                    if($reserved) {
                                                        echo "<button class='btn btn-success disabled' type='submit'>Reserve</button>";
                                                    }
                                                    else {
                                                        echo "<button class='btn btn-success' type='submit'>Reserve</button>";
                                                    }
                                                ?>
                                            </form>
                                      </div>
    						</div><!---thumbnail--->
  						</div><!---end--->
                        
                        <div class="col-sm-6 col-md-3"><!---start--->
    						<div class="thumbnail"><!--thumbnail--->
      							<img src="../bootstrap/img/movies/smurfs.jpg" style="width:170px; height:250px;">
      								<div class="caption">
        								<h4>The Smurfs</h4>                                                             
                                            <form action="<?php echo base_url('mdvd/reserve_movie'); ?>" method="post">   
                                                <input type="hidden" name="title" value="The Smurfs">
                                                <?php
                                                    if($reserved) {
                                                        echo "<button class='btn btn-success disabled' type='submit'>Reserve</button>";
                                                    }
                                                    else {
                                                        echo "<button class='btn btn-success' type='submit'>Reserve</button>";
                                                    }
                                                ?>
                                            </form>
                                      </div>
    						</div><!---thumbnail--->
  						</div><!---end--->
					</div><!---end of first row---></p>
                    
                    <p><div class="row"><!---second row--->
  						<div class="col-sm-6 col-md-3"><!---start--->
    						<div class="thumbnail"><!--thumbnail--->
      							<img src="../bootstrap/img/movies/gijoe.jpg" style="width:170px; height:250px;">
      								<div class="caption">
        								<h4>G.I. Joe Retaliation</h4>                                                            
                                            <form action="<?php echo base_url('mdvd/reserve_movie'); ?>" method="post">   
                                                <input type="hidden" name="title" value="G.I. Joe Retaliation">
                                                <?php
                                                    if($reserved) {
                                                        echo "<button class='btn btn-success disabled' type='submit'>Reserve</button>";
                                                    }
                                                    else {
                                                        echo "<button class='btn btn-success' type='submit'>Reserve</button>";
                                                    }
                                                ?>
                                            </form>
                                      </div>
    						</div><!---thumbnail--->
  						</div><!---end--->
                        
                        <div class="col-sm-6 col-md-3"><!---start--->
    						<div class="thumbnail"><!--thumbnail--->
      							<img src="../bootstrap/img/movies/worldwarz.jpg" style="width:170px; height:250px;">
      								<div class="caption">
        								<h4>World War Z</h4>                                                                   
                                            <form action="<?php echo base_url('mdvd/reserve_movie'); ?>" method="post">   
                                                <input type="hidden" name="title" value="World War Z">
                                                <?php
                                                    if($reserved) {
                                                        echo "<button class='btn btn-success disabled' type='submit'>Reserve</button>";
                                                    }
                                                    else {
                                                        echo "<button class='btn btn-success' type='submit'>Reserve</button>";
                                                    }
                                                ?>
                                            </form>
                                      </div>
    						</div><!---thumbnail--->
  						</div><!---end--->
                        
                        
                        <div class="col-sm-6 col-md-3"><!---start--->
    						<div class="thumbnail"><!--thumbnail--->
      							<img src="../bootstrap/img/movies/afterearth.jpg" style="width:170px; height:250px;">
      								<div class="caption">
        								<h4>After Earth</h4>                                                                  
                                            <form action="<?php echo base_url('mdvd/reserve_movie'); ?>" method="post">   
                                                <input type="hidden" name="title" value="After Earth">
                                                <?php
                                                    if($reserved) {
                                                        echo "<button class='btn btn-success disabled' type='submit'>Reserve</button>";
                                                    }
                                                    else {
                                                        echo "<button class='btn btn-success' type='submit'>Reserve</button>";
                                                    }
                                                ?>
                                            </form>
                                      </div>
    						</div><!---thumbnail--->
  						</div><!---end--->
                        
                        <div class="col-sm-6 col-md-3"><!---start--->
    						<div class="thumbnail"><!--thumbnail--->
      							<img src="../bootstrap/img/movies/thisistheend.jpg" style="width:170px; height:250px;">
      								<div class="caption">
        								<h4>This is the End</h4>                                                                   
                                            <form action="<?php echo base_url('mdvd/reserve_movie'); ?>" method="post">   
                                                <input type="hidden" name="title" value="This is the End">
                                                <?php
                                                    if($reserved) {
                                                        echo "<button class='btn btn-success disabled' type='submit'>Reserve</button>";
                                                    }
                                                    else {
                                                        echo "<button class='btn btn-success' type='submit'>Reserve</button>";
                                                    }
                                                ?>
                                            </form>
                                      </div>
    						</div><!---thumbnail--->
  						</div><!---end--->
					</div><!---end of second row---></p>
                    
                    
                    <ul class="pagination">
  						<li class="disabled"><a href="#">&laquo;</a></li>
  						<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
  						<li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
						</ul>
                    
                    </div>
                    </div>
                                        
                    
        </div> <!---end of whole row--->
        </div>
        
        <div class="row"><br><br></div>

<div class="footer">    
    <div class="container">
        
        <div class="row"> 
            <div class="col-lg-8">
                <h4>M DVD Cafe</h4> <hr/>
                
                <p> <i class="icon-home"></i> &nbsp; Location: Salinas Drive, Lahug
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <i class="icon-phone"></i> &nbsp; Phone: 1234567890 </p>
                <p> <i class="icon-envelope"></i> &nbsp; Email: xanpatan@gmail.com
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <i class="icon-globe"></i> &nbsp; Web: <a href=" ">www.mdvdmoviehouse.com</a></p>
                
            </div>  
            
            <div class="col-lg-4">
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
            <div class="col-lg-12"> 
                <hr/>
                <p class="pull-right"><a>a DBMS 2 project &copy; Team Ascend 2014</a></p>
            </div>
        </div>
        
    </div> <!-- end of container tag-->
</div> <!-- end of footer tag-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../bootstrap/js/jquery.cslider.js"></script>
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
