
<?php
//import_plugin.php
sleep(3);
$output = '';

if(isset($_FILES['file']['name']) &&  $_FILES['file']['name'] != '')
{
 $valid_extension = array('xml');
 $file_data = explode('.', $_FILES['file']['name']);
 $file_extension = end($file_data);
 if(in_array($file_extension, $valid_extension))
 {
  $data = simplexml_load_file($_FILES['file']['tmp_name']);
  $connect = new PDO('mysql:host=localhost;dbname=exempt_db','root', '');
  $query = "
  INSERT INTO announcement 
   (type, title, year ,note ,month, url ,announcement_key) 
   VALUES(:type, :title, :year , :note , :month , :url , :announcement_key);
  ";
  $statement = $connect->prepare($query);
  for($i = 0; $i < count($data); $i++)
  {
   $statement->execute(
    array(
     ':type'   => $data->announcement[$i]->type,
     ':title'  => $data->announcement[$i]->title,
     ':year' => $data->announcement[$i]->year,
	 ':note' => $data->announcement[$i]->note,
	 ':month' => $data->announcement[$i]->month,
	 ':url' => $data->announcement[$i]->url,
	':announcement_key'   => $data->announcement[$i]->announcement_key
    )
   );

  }
  $result = $statement->fetchAll();
  if(isset($result))
  {
   $output = '<div class="alert alert-success">Import Data Done</div>';
  }
 }
 else
 {
  $output = '<div class="alert alert-warning">Invalid File</div>';
 }
}
else
{
 $output = '<div class="alert alert-warning">Please Select XML File</div>';
}

echo $output;

?>