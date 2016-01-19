<?php
$redis = new Redis();
$redis->connect('172.30.113.179', 6379);
try {
	$redis->ping();
} catch(RedisException $e) {
	echo 'Error: ' .  $e->getMessage();
	exit;
}

$redis->set('name', 'Maria');
echo $redis->get('name');