<?php


    $result=$mysqli->query("SELECT * FROM articles ORDER BY id");
    while ($article=mysqli_fetch_array($result)) {
        echo '<article class="single-article">';
        echo '<h2>'.$article['title'].'</h2>';
        echo '<div class="article-content">';
        echo '<p>'.$article['content'].'</p>';
        echo '</div>';
        echo '<p> Category:<strong> '.$article['category'].'</strong></p>';
        echo '<p> Status:<strong> '.$article['stats'].'</strong></p>';
        echo '<a href="resources/db/db_deleteArticle.php?id=' . $article['id'] . '">';
        echo '<div class="form-group col-lg-12"><i class="remove icon"></i>Delete the Article</div>';
        echo '</a>';
        echo '</article>';
    }