<?php

require_once('CacheApc.php');
$oCache = new CacheAPC();

if($oCache->enable)
{
	$cacheData = $oCache->getData('myTest');

	var_dump('<pre>', $cacheData);
}
else echo 'APC not installed';