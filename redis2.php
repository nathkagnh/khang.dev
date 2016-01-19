<?php

$redis = new Redis();
$redis->connect('172.30.113.179', 6379);

echo '<p>Name: ' . $redis->get('name') . '</p></br>';
echo '<p>Email: ' . $redis->get('email') . '</p></br>';