
<div class="container">
    
    <div class="row">
        <div class="span5 offset3">
            
            <div class="loginBox">
                <div class="title">Log in to your account</div>
                
                <form action="<?php echo base_url('mdvd/db_login_validation'); ?>" method="post">
                    <div class="control-group">
                        <div class="controls">
                            <label>User name</label>
                            <input type="text" maxlength="15" name="username" placeholder="Enter your user name here..."/>
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
                            <button type="submit" name="login_submit" class="btn btn-inverse">Sign In</button> 
                            <button type="reset" class="btn btn-inverse">Clear</button>
                        </div>
                    </div>
                    <br/>
                    <?php echo validation_errors(); ?>    
                    
                </form>
                
            </div> <!-- end of login box div tag--> <br/>
            
            
            
        </div> <!-- end of span5 tag-->
    </div> <!-- end of row tag--> 
    
    
    
    
    <div class="row">
        <div class="span12">
            
        </div> <!-- end of span12 tag-->
    </div> <!-- end of row tag-->
    
    
</div> <!-- end of container tag-->