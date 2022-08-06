<?php
   define('DB_SERVER', '127.0.0.1');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'pi');
   define('DB_DATABASE', 'ecg');
   $db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
