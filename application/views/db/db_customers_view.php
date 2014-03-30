<div class="row span12">
    <br/><br/>
    <h1 style="text-align: center" class="span8 offset2">Customer <i class="icon-table"></i></h1>  
</div> 
      
<div class="span12">    
    <table class="table table-bordered span12">
        <thead>
            <th>Customer ID</th>
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
                         ."<td>".$row->cus_id."</td>"
                         ."<td>".$row->cus_contact."</td>"
                         ."<td>".$row->cus_email."</td>"
                         ."<td>".$row->cus_username."</td>"
                         ."<td>".$row->cus_fname."</td>"
                         ."<td>".$row->cus_lname."</td>"
                    ."</tr>";
                }
            ?>
        </tbody>
    </table>
</div> 