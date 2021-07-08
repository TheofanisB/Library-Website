<html>
	
	<!-- PLUGIN GIA NA VREI TA APOTELESMATA ANAZITISIS APO TIN VASI . XRISIMOPOIEITAI GIA TIN SEARCH.PHP-->
<center>

    <?php
    include ("connection.php");
    ?>

   

    <?php
	
	
	$author=$_GET['author'];
	$atitle=$_GET['atitle'];
	$year=$_GET['year'];
	$month=$_GET['month'];
	$url=$_GET['url'];
	$key=$_GET['key'];
	$option=$_GET['type_option'];
	
	
	
	
	// $toDo ="insert into contact(Name,email,subject,contact_input)values ($name,$email,$subject,$message)";
   // $authorid = "select  * from author where name=' $author '"
 
    $sql = "select  * from `announcement` where `authod_id`='$authorid' and `title`='$atitle' and `year`='$year';";
	$raw_results = mysql_query("SELECT * FROM announcement WHERE (`authod_id` LIKE '%".$$author."%')");
	
	
	 if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$results['authod_id']."</h3>".$results['title']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
	
	
	
	

    $result = mysqli_query($con, $sql) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA VROUME TOUS USERS ENO EXOUME SINDETHEI ME TIN VASI "));
    ?>
    <br>
    <table class="table table-bordered table-sm">
        <tr>
            <th>Type</th>
            <th>Authod ID</th>
            <th>Title</th>
			<th>Year</th>
			<th>Note</th>
			<th>Month</th>
			<th>URL</th>
			<th>Announcement Key</th>
			<th>Type</th>
			
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>

            <tr class="alt">
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['authod_id']; ?></td>
                <td><?php echo $row['id']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['year']; ?></td>
				<td><?php echo $row['note']; ?></td>
				<td><?php echo $row['month']; ?></td>
				<td><?php echo $row['url']; ?></td>
				<td><?php echo $row['announcement_key']; ?></td>
            </tr>
            <?php
        }
        ?>	
    </table>
</center>
</html>