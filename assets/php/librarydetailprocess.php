<?php
require 'vendor/autoload.php';

	EasyRdf\RdfNamespace::set("dc", 'https://purl.org/dc/elements/1.1');

	$newrdf = new \EasyRdf\Graph("https://levijovanatan.github.io/books.rdf");
	$newrdf->load();

    $allSubjek = $newrdf->resourcesMatching('dc:title'); 
    
	$i=1;

	foreach($allSubjek as $subjek){
		$title[$i] = $newrdf->get($subjek, 'dc:title');
		$author[$i] = $newrdf->get($subjek, 'dc:creator');
		$publisher[$i] = $newrdf->get($subjek, 'dc:publisher');
		$date[$i] = $newrdf->get($subjek, 'dc:date');
		$type[$i] = $newrdf->get($subjek, 'dc:type');
        $image[$i] = $newrdf->get($subjek, 'dc:Image');
        $desc[$i] = $newrdf->get($subjek, 'dc:description');
		$i++;
	}
?>