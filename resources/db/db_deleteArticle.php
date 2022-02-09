<?php
require_once('db_connect.php');


if (isset($_GET['id'])){
  $id=$_GET['id'];
  $statement=$mysqli->prepare("DELETE FROM articles WHERE id=? LIMIT 1");
  $statement->bind_param("i",$id);
  $statement->execute();
  $statement->close();
  header("Location: ../../articles.php");
}
?>