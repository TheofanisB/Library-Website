

<?php
	// PLUGIN POU XRISIMOPOIEITAI GIA TA STATISTIKA

$connect = new PDO("mysql:host=localhost;dbname=exempt_db", "root", "");

if(isset($_POST["year"]))
{
 $query = "
 SELECT * FROM announcement 
 WHERE year = '".$_POST["year"]."' 
 ORDER BY announcement_id ASC
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'title'   => $row["title"],
   'year'  => floatval($row["year"])
  );
 }
 echo json_encode($output);
}

?>