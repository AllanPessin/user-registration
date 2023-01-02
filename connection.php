<?php
  define('HOST', 'localhost');
  define('DB_USER', 'root');  
  define('DB_PASSWORD', '');
  define('DB_NAME', 'crud');

  $conn = new MySQLi(HOST,DB_USER,DB_PASSWORD,DB_NAME);