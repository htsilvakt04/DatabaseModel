<?php

try {
  $db = new PDO("mysql:host=localhost;dbname=test", "root", "root");

} catch (Exception $e) {
  return "Counldn't connect to the database";
}
