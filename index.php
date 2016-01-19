<a href="phpinfo.php">Php info</a></br>
<a href="apc/index.php">Apc</a></br>

<?php
   //Connecting to Redis server on localhost
   $redis = new Redis();
   $redis->connect('172.30.113.179', 6379);
   echo "Server is running: "+ $redis->ping();