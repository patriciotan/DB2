<div class="row span12">
    <br/><br/>
    <h1 style="text-align: center" class="span8 offset2">Employee <i class="icon-table"></i></h1>  
</div> 
      
<div class="span12">    
    <table class="table table-bordered span12">
        <thead>
            <th>Employee ID</th>
            <th>Contact number</th>
            <th>Email address</th>
            <th>Username</th>
            <th>First name</th>
            <th>Last name</th>
        </thead>
        <tbody>
            <?php
                foreach ($query->result() as $row) {
                    echo "<tr>"
                         ."<td>".$row->emp_id."</td>"
                         ."<td>".$row->emp_contact."</td>"
                         ."<td>".$row->emp_email."</td>"
                         ."<td>".$row->emp_username."</td>"
                         ."<td>".$row->emp_fname."</td>"
                         ."<td>".$row->emp_lname."</td>"
                    ."</tr>";
                }
            ?>
        </tbody>
    </table>
</div> 

<div class="span12 offset1">
    <form action="<?php echo base_url('mdvd/insert_emp'); ?>" method="post">
        <input type="text" style="width:150px" name="contact" class="input-medium search-query" placeholder="Contact number">                         
        <input type="email" style="width:200px" name="email" class="input-medium search-query" placeholder="Email address">                         
        <input type="text" style="width:150px" name="username" class="input-medium search-query" placeholder="User name">                         
        <input type="password" style="width:150px" name="password" class="input-medium search-query" placeholder="Password">                         
        <input type="text" style="width:200px" name="fname" class="input-medium search-query" placeholder="First name">                         
        <input type="text" style="width:150px" name="lname" class="input-medium search-query" placeholder="Last name">                         
        <button type="submit" class="btn btn-inverse" name="insertemp">Add</button></p>
    </form>
    <br/>
    <?php echo validation_errors(); ?>
</div>
