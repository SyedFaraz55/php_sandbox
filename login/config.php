<?php

  define('DB_HOST','localhost');
  define('DB_USER','david');
  define('DB_PASS','admin');
  define('DB_NAME','logindetails');

  $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//   if($conn){
//       echo 'connected';
//   } else {
//       echo 'not';
//   }