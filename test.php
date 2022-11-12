<?php
define('XML', 'http://www.zilles.info/php/1111.xml');
define('XMLlocal', '1111.xml'); 


if($data = simplexml_load_file(XML)){
}
else{
	$data = simplexml_load_file(XMLlocal);
}

$table = new SimpleXMLElement($data);

foreach ($table->xpath('//class') as $character) {
    echo $character->name, ' 12 ', $character->id, PHP_EOL;
}
?>