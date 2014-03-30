
<div class="container">
    <div class="row">
        <div class="span3">
            
            <table class="table table-bordered basicTable">
                <tr>
                    <td class="basicHeader">
                        <i class=" icon-leaf"></i>
                        <h3> Medium </h3>
                    </td>
                </tr>
                
                <tbody class="basicBody">
                <tr>
                    <td>
                        <h2> Php 150.00 </h2>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <h4> Movie Room </h4>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <h4> Good for 2 persons </h4>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <form action="<?php echo base_url('mdvd/reserve_room'); ?>" method="post">   
                            <input type="hidden" name="rmno" value="0000000001">
                            <?php
                                if($reserved) {
                                    echo "<button class='btn btn-success disabled' type='submit'>Reserve Now</button>";
                                }
                                else {
                                    echo "<button class='btn btn-success' type='submit'>Reserve Now</button>";
                                }
                            ?>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
            
        </div> <!-- end of span3 tag-->
        
        
        <div class="span3">
            
            <table class="table table-bordered basicTable">
                <tr>
                    <td class="basicHeader">
                        <i class=" icon-leaf"></i>
                        <h3> Large </h3>
                    </td>
                </tr>
                
                <tbody class="basicBody">
                <tr>
                    <td>
                        <h2> Php 200.00 </h2>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <h4> Movie Room </h4>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <h4> Good for 4 persons </h4>
                    </td>
                </tr>
                
                <tr>
                    <td>                                      
                        <form action="<?php echo base_url('mdvd/reserve_room'); ?>" method="post">   
                            <input type="hidden" name="rmno" value="0000000002">
                            <?php
                                if($reserved) {
                                    echo "<button class='btn btn-success disabled' type='submit'>Reserve Now</button>";
                                }
                                else {
                                    echo "<button class='btn btn-success' type='submit'>Reserve Now</button>";
                                }
                            ?>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
            
        </div> <!-- end of span3 tag-->
        
        
        <div class="span3">
            
            <table class="table table-bordered basicTable">
                <tr>
                    <td class="basicHeader">
                        <i class="icon-music"></i>
                        <h3> KTV </h3>
                    </td>
                </tr>
                
                <tbody class="basicBody">
                <tr>
                    <td>
                        <h2> Php 200.00 </h2>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <h4> Karaoke Room </h4>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <h4> Good for a group </h4>
                    </td>
                </tr>   
                
                <tr>
                    <td>                                        
                        <form action="<?php echo base_url('mdvd/reserve_room'); ?>" method="post">   
                            <input type="hidden" name="rmno" value="0000000003">
                            <?php
                                if($reserved) {
                                    echo "<button class='btn btn-success disabled' type='submit'>Reserve Now</button>";
                                }
                                else {
                                    echo "<button class='btn btn-success' type='submit'>Reserve Now</button>";
                                }
                            ?>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
            
        </div> <!-- end of span3 tag-->
        
        
        <div class="span3">
            
            <table class="table table-bordered premTable">
                <tr>
                    <td class="premHeader">
                        <i class="icon-star"></i>
                        <h3> VIP </h3>
                    </td>
                </tr>
                
                <tbody class="premBody">
                <tr>
                    <td>
                        <h2> Php 250.00 </h2>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <h4> Movie Room </h4>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <h4> Good for 6 persons </h4>
                    </td>
                </tr>
                
                <tr>
                    <td>                                                            
                        <form action="<?php echo base_url('mdvd/reserve_room'); ?>" method="post">   
                            <input type="hidden" name="rmno" value="0000000004">
                            <?php
                                if($reserved) {
                                    echo "<button class='btn btn-success disabled' type='submit'>Reserve Now</button>";
                                }
                                else {
                                    echo "<button class='btn btn-success' type='submit'>Reserve Now</button>";
                                }
                            ?>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
            
        </div> <!-- end of span5tag-->
        
    </div> <!-- end of row tag-->
    
    
    
    
    <div class="row">
        <div class="span12">
            
        </div> <!-- end of span12 tag-->
    </div> <!-- end of row tag-->
    
    
</div> <!-- end of container tag-->
