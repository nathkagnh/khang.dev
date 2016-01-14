<?php

require_once('CacheApc.php');
$oCache = new CacheAPC();

if($oCache->enable)
{
	$oCache->delData('myTest');

	$cacheData = $oCache->getData('myTest');

	echo 'Data from memory: <pre>'
	print_r($cacheData);
	echo '</pre>';
}