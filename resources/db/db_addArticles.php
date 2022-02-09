<?php

      if (isset($_POST['add'])) {
          $title=strip_tags($_POST['title']);
          $content=strip_tags($_POST['content']);
          $category=strip_tags($_POST['category']);
          $stats=strip_tags($_POST['stats']);
          $statement = $mysqli->prepare("INSERT articles (title,content,category,stats) VALUES (?,?,?,?) LIMIT 1");
          $statement->bind_param("ssss", $title, $content, $category, $stats);
          $statement->execute();
          $statement->close();
      }