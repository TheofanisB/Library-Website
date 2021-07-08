<?php
	//<!--BACKUP TOU SHOW RESULTS -->
	
	$mysqli = new mysqli("localhost", "root", "", "exempt_db");
	if($mysqli->connect_error) {
		exit('Could not connect');
	}
	
	
	  mysql_select_db("exempt_db") or die(mysql_error());
	
	
?>	
<p>Type of Announcement:</p>
<input type="radio" name="type_option" value="magazine">  Magazine 
<input type="radio" name="type_option" value="workshop">  Workshop 
<input type="radio" name="type_option" value="book">  Book 
<input type="radio" name="type_option" value="other">  Other 	
<div class="form-group">
	<label for="author">Author *</label>
	<input type="text" class="form-control" id="author">
</div>
<div class="form-group">
	<label for="atitle">Article Title *</label>
	<input type="text" class="form-control" id="atitle">
</div>
<div class="form-group">
	<label for="year">Year *</label>
	<input type="text" class="form-control" id="year">
</div>

<div class="form-group">
	<label for="month">Month</label>
	<input type="text" class="form-control" id="month">
</div>

<div class="form-group">
	<label for="url">URL</label>
	<input type="text" class="form-control" id="url">
</div>

<div class="form-group">
	<label for="key">Key</label>
	<input type="text" class="form-control" id="key">
</div>
<div class="form-group">
	<input type="submit" value="SEARCH" id="custom-button" class="btn btn-primary btn-md text-white">
	
	
	<div id="search_part">
		
		<!--      https://www.youtube.com/watch?v=T3PDgtliezo         -->
		<div  id="upbutton">
			
		</div>
		
		<script type="text/javascript">
			//function testfunction(){document.getElementById("result_area").value=<?php    ?>};
			
			//$output = shell_exec('php view_search_results.php');
			//echo "<pre>$output</pre>";
			
			const customBtn = document.getElementById("custom-button");
			customBtn.addEventListener("click", function() {
				//$('#result_area').html('<button onclick="showResults()" >Show results</button>');
				
				//	$('#result_area').html('<button id="upload_button">Hello</button>');
				$('#result_area').html('<button id="show_results" onclick="view_search_results.php">Show results</button>');
				
			});
		</script>
		
	</div >
</div>


<?php
	
	if (isset($_POST['atitle']){
		$author_id123='admin';
		
		
		$authorid = "SELECT `author_id` FROM `author` WHERE `name`='".$author_id123."';";
	}
	
	
	// $sql = "select  authod_id from `announcement` where (`authod_id`='$author');";// and `title`='$atitle' and `year`='$year';";
	echo "<p>".$authorid."</p>";
	$stmt = $mysqli->prepare($authorid);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($author_id);
	$stmt->fetch();
	$stmt->close();
	
	echo "<table>";
	echo "<tr>";
	echo "<th>CompanyName</th>";
	echo "<td>eimai edw re " . $author_id . "</td>";
	echo "</tr>";
	echo "</table>";
	
?> 