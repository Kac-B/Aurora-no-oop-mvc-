<?php

  $dbServer='localhost';
  $dbUser='root';
  $dbPassword='';
  $dbName='aurora';

  $mysqli=new mysqli($dbServer,$dbUser,$dbPassword,$dbName);
  $mysqli->set_charset("utf-8");
  
  if (mysqli_connect_errno()) {
      echo 'Error Database.';
  }