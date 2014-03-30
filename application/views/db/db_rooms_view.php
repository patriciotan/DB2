<div class="row span12">
    <br/><br/>
    <h1 style="text-align: center" class="span8 offset2">Room <i class="icon-table"></i></h1>  
</div> 
      
<div class="span12">    
    <table class="table table-bordered span12">
        <thead>
            <th>Room number</th>
            <th>Size</th>
            <th>Status</th>
            <th>Status Action</th>
        </thead>
        <tbody>
            <?php
                foreach ($query->result() as $row) {
                    echo "<tr>"
                         ."<td>".$row->rm_no."</td>"
                         ."<td>".$row->rm_size."</td>"
                         ."<td>".$row->rm_status."</td>"
                         .'<td>
                            <form action="'.base_url("mdvd/free_room").'" method="post">   
                                <input type="hidden" name="avail" value='.$row->rm_no.'>
                                <button class="btn btn-inverse" type="submit">Make available</button>
                            </form>
                         </td>'
                    ."</tr>";
                }
            ?>
        </tbody>
    </table>
</div> 
