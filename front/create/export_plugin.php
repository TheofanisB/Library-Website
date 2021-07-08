<?php
	$connect = new PDO("mysql:host=localhost;dbname=exempt_db", "root", "");
	$get_all_table_query = "SHOW TABLES";
	$statement = $connect->prepare($get_all_table_query);
	$statement->execute();
	$result = $statement->fetchAll();
	
	if(isset($_POST['table']))
	{
		$output = '';
		foreach($_POST["table"] as $table)
		{
			$show_table_query = "SHOW CREATE TABLE " . $table . "";
			$statement = $connect->prepare($show_table_query);
			$statement->execute();
			$show_table_result = $statement->fetchAll();
			
			foreach($show_table_result as $show_table_row)
			{
				$output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
			}
			$select_query = "SELECT * FROM " . $table . "";
			$statement = $connect->prepare($select_query);
			$statement->execute();
			$total_row = $statement->rowCount();
			
			for($count=0; $count<$total_row; $count++)
			{
				$single_result = $statement->fetch(PDO::FETCH_ASSOC);
				$table_column_array = array_keys($single_result);
				$table_value_array = array_values($single_result);
				$output .= "\nINSERT INTO $table (";
				$output .= "" . implode(", ", $table_column_array) . ") VALUES (";
				$output .= "'" . implode("','", $table_value_array) . "');\n";
			}
		}
		$file_name = 'database_backup_on_' . date('y-m-d') . '.sql';
		$file_handle = fopen($file_name, 'w+');
		fwrite($file_handle, $output);
		fclose($file_handle);
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . basename($file_name));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file_name));
		ob_clean();
		flush();
		readfile($file_name);
		unlink($file_name);
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ICSD Database Export</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	</head>
	<body>
		<br />
		<div class="container">
			<div class="row">
				<h2 align="center">How to Take Backup of Mysql Database using PHP Code</h2>
				<br />
				<form method="post" id="export_form">
					<h3>Select Tables for Export</h3>
					<div class="checkbox">
						<label><input type="checkbox" class="checkbox_table" name="table[]" value="announcement" />Announcement</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" class="checkbox_table" name="table[]" value="article" /> Article</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" class="checkbox_table" name="table[]" value="author" />Author</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" class="checkbox_table" name="table[]" value="book>" />Book</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" class="checkbox_table" name="table[]" value="inbook" /> Inbook</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" class="checkbox_table" name="table[]" value="workshop" /> Workshop</label>
					</div>
					
					
					
					
					<div class="form-group">
						<input type="submit" name="submit" id="submit" class="btn btn-info" value="Export" />
					</div>
				</form>
				<button onclick="goBack()">Go Back</button>
				
				<script>
					function goBack() {
					window.history.back();
					}
				</script>
			</div>
		</div>
	</body>
</html>
<script>
	$(document).ready(function(){
		$('#submit').click(function(){
			var count = 0;
			$('.checkbox_table').each(function(){
				if($(this).is(':checked'))
			{
			count = count + 1;
			}
			});
			if(count > 0)
			{
			$('#export_form').submit();
			}
			else
			{
				alert("Please Select At least one table for Export");
				return false;
			}
		});
	});
</script>
