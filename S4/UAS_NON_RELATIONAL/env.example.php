<?php

  /* 
    App : Aplikasi sederhana cek stok
    Author : [
      {
        name : Krisnanto
      },
      {
        name : Andi Susanto
      }
    ]
  */
  $variables = [
      'APP_KEY' => '0d74f75ecb878c6785bff24e35043853',
      'DB_HOST' => 'localhost',
      'DB_USERNAME' => 'krisnanto',
      'DB_PASSWORD' => 'krisnanto',
      'DB_NAME' => 'krisnanto',
      'DB_PORT' => '27017',
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>