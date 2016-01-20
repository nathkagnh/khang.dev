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

$sdt = '0974269381';
$address = 'abcxyz';

$redis->set('array', array('sdt' => $sdt, 'address' => $address));

echo 'successful';
?>
</br><a href="redis2.php">click to see data from redis</a>