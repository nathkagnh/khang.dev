<?php
$redis = new Redis();
$redis->connect('172.30.113.179', 6379);
try {
	$redis->ping();
} catch(RedisException $e) {
	echo 'Error: ' .  $e->getMessage();
	exit;
}

$redis->set('email', 'nathkangh@gmail.com');
$redis->set('name', 'Lê Đỗ Nhật Khang');

echo 'successful';
?>
</br><a href="redis2.php">click to see data from redis</a>