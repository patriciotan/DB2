<?php 
	$result = $this->db->get('movie');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Movies</title>

	<link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="image/ico" href="img/favicon.png"/>
    <script src="js/bootstrap.min.js" type="text/javascript"> </script>
    <script src="js/jquery.js" type="text/javascript"> </script>
    <script src="js/jquery.dataTables.js" type="text/javascript"> </script>
    
</head>

<body>

<div class="span12">
	<h1 class="span8">M DVD Cafe</h1>&nbsp;
	<p>
    	<a href="admin_home.php" style="float: right;">Go back</a><br>
        <a href="admin_logout.php" style="float: right;">Sign out</a>
    </p>
	<h3 class="span8">Table: movies</h3>
    &nbsp;
    
    <form class="form-search offset1">
    	<input type="text" style="width:400px" name="name" class="input-medium search-query" placeholder="Name">
        <input type="text" style="width:150px" name="genre" class="input-medium search-query" placeholder="Genre">
        <input type="text" style="width:150px" name="time" class="input-medium search-query" size="20" placeholder="Time (minutes)">
    	<button type="submit" class="btn btn-success" formaction="admin_insertmovie.php" formmethod="post" id="insert">Add to database</button></p>
    </form>
    <table class="table table-bordered table-hover span10">
		<thead>
            <th>Name</th>
            <th>Genre</th>
            <th>Running Time (minutes)</th>
            <th>Status</th>
        </thead>
        <tbody>
        	<?php
				while($row = $result->result_array()) {
					echo "<tr>"
						 ."<td>".$row->title."</td>"
						 ."<td>".$row->genre."</td>"
						 ."<td>".$row->runtime."</td>"
						 ."<td>".$row->status."</td>"
						 ."</tr>";
				}
			?>
        </tbody>
    </table>
</div>

</body>
</html>