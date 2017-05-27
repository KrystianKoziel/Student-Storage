<?php

  $host = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name = "storage";

  $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
  $polaczenie-> query ('SET NAMES utf8');
  $polaczenie-> query ('SET CHARACTER_SET utf8_unicode_ci');
 ?>
