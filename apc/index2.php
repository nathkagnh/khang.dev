<?php

require_once('CacheApc.php');
$oCache = new CacheAPC();

if($oCache->enable)
{
	$cacheData = $oCache->getData('myTest');
	echo 'Data from memory: <pre>';
	print_r($cacheData);
	echo '</pre>';
	echo 'Click <a href="index3.php">here</a> to delete cache';
}
else echo 'APC not installed';