<div class="row span12">
    <br/><br/>
    <h1 style="text-align: center" class="span8 offset2">Movies <i class="icon-table"></i></h1>  
</div> 
      
<div class="span12">    
    <table class="table table-bordered span12">
        <thead>
            <th>Movie ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Status</th>  
            <th>Status Action</th>  
        </thead>
        <tbody>
            <?php
                foreach ($query->result() as $row) {
                    echo "<tr>"
                         ."<td>".$row->m_id."</td>"
                         ."<td>".$row->m_title."</td>"
                         ."<td>".$row->m_genre."</td>"
                         ."<td>".$row->m_status."</td>"
                         .'<td>
                            <form action="'.base_url("mdvd/free_movie").'" method="post">   
                                <input type="hidden" name="avail" value='.$row->m_id.'>
                                <button class="btn btn-inverse" type="submit">Make available</button>
                            </form>
                         </td>'
                    ."</tr>";
                }
            ?>
        </tbody>
    </table>
</div> 

<div class="span12 offset2">
    <form action="<?php echo base_url('mdvd/insert_movie'); ?>" method="post">
        <input type="text" style="width:500px" name="title" class="input-medium search-query" placeholder="Title">
        <select name="genre">
            <option value="Action">Action</option>
            <option value="Animation">Animation</option>
            <option value="Comedy">Comedy</option>
            <option value="Fantasy">Fantasy</option>
            <option value="Horror">Horror</option>
            <option value="Drama">Drama</option>
        </select>                          
        <button type="submit" class="btn btn-inverse" name="insertmov">Add</button></p>
    </form>
    <br/>
    <?php echo validation_errors(); ?>
</div>  