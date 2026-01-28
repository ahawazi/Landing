<?php
try {
  $db = new PDO(
    "mysql:host=localhost;dbname=counselling;charset=utf8",
    "root",
    ""
  );
} catch (PDOException $e) {
  die("DB ERROR");
}
