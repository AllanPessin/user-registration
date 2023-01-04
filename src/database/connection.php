<?php
  define("HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", "");
  define("DB_NAME", "crud");

  try {
    $connection = new MySQLi(HOST,DB_USER,DB_PASSWORD,DB_NAME);
  } catch (\Throwable $th) {
    throw $th;
  }