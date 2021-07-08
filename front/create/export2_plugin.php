<?php
	//<!--https://www.youtube.com/watch?v=wuOblKWtBJ0 -->
	$link =mysqli_connect("localhost","root","","exempt_db");
	if ($link ===false){
		die("ERROR: COULD NOT CONNECT TO THE DATABASE".mysqli_connect_error() ) ;
		
	}
	
	$sql = "SELECT * FROM announcement ";
	$res = mysqli_query($link,$sql);
	
	$xml = new XMLWriter();
	$xml->openURI("php://output");
	$xml->startDocument();
	$xml->setIndent(true);
	
	$xml->startElement('announcements');
	
	while ($row = mysqli_fetch_assoc($res)) {
		$xml->startElement("announcement");
		
		$xml->writeAttribute('announcement_id', $row['announcement_id']);
		$xml->writeAttribute('author_id', $row['author_id']);
		$xml->writeAttribute('type', $row['type']);
		$xml->writeAttribute('title', $row['title']);
		$xml->writeAttribute('year', $row['year']);
		$xml->writeAttribute('month', $row['month']);
		$xml->writeAttribute('note', $row['note']);
		$xml->writeAttribute('url', $row['url']);
	    $xml->writeAttribute('announcement_key', $row['announcement_key']);
		// $xml->writeRaw($row['announcement']);
		
		$xml->endElement();
	}
	
	$xml->endElement();
	
	header('Content-type: text/xml');
	$xml->flush();
?>