<?php

echo 'This is a test APC-Cache';

require_once('CacheApc.php');

$data = array(
	'name' => 'table',
	'color' => 'brown',
	'size' => array(
		'x' => 200,
		'y' => 120,
		'z' => 150,
		),
	'strength' => 10,
	);

$oCache = new CacheAPC();

if($oCache->enable)
{
	$oCache->setData('myTest', $data);
	echo "Data is cached, click <a href='index2.php'>here</a> to see";
}
else echo 'APC not intalled';