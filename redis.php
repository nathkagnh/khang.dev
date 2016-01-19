<?php
$redis = new Redis();
$redis->connect('172.30.113.179', 6379);
try {
	$redis->ping();
} catch(RedisException $e) {
	echo 'Error: ' .  $e->getMessage();
	exit;
}

echo 'Server is running';