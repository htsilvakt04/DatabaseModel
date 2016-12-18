<?php
require_once("app/bootstrap.php");

$result = $db->query("SELECT * FROM users");
var_dump($result->fetchAll(PDO::FETCH_OBJ));
