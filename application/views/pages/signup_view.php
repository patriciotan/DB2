<div class="container">
    
    <div class="row">
        <div class="span5 offset3">
            
            <div class="loginBox">
                <div class="title">Create an account</div>
                
                <form action="<?php echo base_url('mdvd/signup_validation'); ?>" method="post">
                    <div class="control-group">
                        <div class="controls">
                            <label>User name</label>
                            <input type="text" maxlength="15" name="username" placeholder="Enter your user name here..."/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <div class="controls">
                            <label>Email address</label>
                            <input type="email" maxlength="50" name="email" placeholder="Enter your email address here..."/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <div class="controls">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter your password here..."/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <div class="controls">
                            <label>Confirm Password</label>
                            <input type="password" name="cpassword" placeholder="Enter your password again..."/>
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                        <div class="controls"> 
                            <button type="submit" name="signup_submit" class="btn btn-info">Sign Up</button> 
                            <button type="reset" class="btn btn-danger">Clear</button>
                        </div>
                    </div>
                    <br/>
                    <?php echo validation_errors(); ?>
                    
                </form>
                
            </div> <!-- end of login box div tag--> <br/>
            
            
            
        </div> <!-- end of span5 tag-->
    </div> <!-- end of row tag-->
    
    
    <div class="row">
        <div class="span5 offset3">
            
            <p style="text-align: center;"> Already have an account? <a href="<?php echo base_url('mdvd/login'); ?>">Sign In</a> </p>
            
        </div> <!-- end of span12 tag-->
    </div> <!-- end of row tag-->
    
    
    
    
    <div class="row">
        <div class="span12">
            
        </div> <!-- end of span12 tag-->
    </div> <!-- end of row tag-->
    
    
</div> <!-- end of container tag-->