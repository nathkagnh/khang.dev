<?php

class CacheAPC
{
	var $timeToLive = 600;
	var $enable = false;

	function CacheAPC()
	{
		$this->enable = extension_loaded('apcu');
	}

	function getData($key)
	{
		$res = false;
		$data = apc_fetch($key, $res);
		return $res ? $data : null;
	}

	function setData($key, $data)
	{
		return apc_store($key, $data, $this->timeToLive);
	}

	function delData($key)
	{
		return apc_exists($key) ? apc_delete($key) : true;
	}
}