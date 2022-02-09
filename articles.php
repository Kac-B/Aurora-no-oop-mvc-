<?php
//initialize session
session_start();

if (isset($_SESSION['login'])) {
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aurora Creation - Articles</title>

  <!-- Bootstrap Core CSS -->
  <link href="resources/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="resources/css/business-casual.css" rel="stylesheet">

  <!-- Fonts -->
  <link
    href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
    rel="stylesheet" type="text/css">
  <link
    href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
    rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div class="brand">Aurora Creation</div>



  <!-- Navigation -->
  <?php require_once 'resources/view/template/header.php'; ?>

  <div class="container">

    <div class="row">
      <div class="box">
        <div class="col-lg-12">
          <h2 class="text-center"> Welcome
            <?php echo $fname;
                            echo " ";
                            echo $lname; ?>
            <a href="logout.php">Logout</a>
          </h2>
          <hr>
          <h2 class="intro-text text-center">Aurora
            <strong>articles</strong>
          </h2>
          <hr>
        </div>
        <div class="col-lg-12 text-center">
          <!--show artciles-->
          <?php require_once ('resources/db/db_connect.php'); //conncection to database ?>
          <?php require_once ('resources/db/db_showArticles.php');//show articles from database?>
          <div class="col-lg-12 text-center">
          </div>
        </div>
      </div>
    </div><!-- /.container -->
    <?php require_once ('resources/db/db_addArticles.php'); //add new articles?>
    <div class="row">
      <div class="box">
        <div class="col-lg-12">
          <h2 class="intro-text text-center">add a new article</h2>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="ui form">
            <hr>
            <div id="add_err2"></div>
            <form role="form">
              <div class="row">
                <div class="form-group col-lg-4">
                  <label>Title</label>
                  <input type="text" id="title" name="title" class="form-control">
                </div>
                <div class="form-group col-lg-4">
                  <label>Category</label>
                  <input type="text" id="category" name="category" class="form-control">
                </div>
                <div class="form-group col-lg-4">
                  <label>Status</label>
                  <select id="stats" name="stats" class="form-control">
                    <option value="R">R</option>
                    <option value="S">S</option>
                    <option value="T">T</option>
                    <option value="L">L</option>
                  </select>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-12">
                  <label>Content</label>
                  <textarea class="form-control" id="content" name="content" maxlength="250" rows="6"></textarea>
                </div>
                <div class="form-group col-lg-12">
                  <button type="submit" id="add" class="btn btn-default" name="add" value="Add Article">Submit</button>
                </div>
                <div class="form-group col-lg-12">
                  <button onClick="window.location.reload();" class="btn btn-default">Refresh Page</button>
                </div>
              </div>
        </div>
      </div>
    </div>

</body>
<?php require_once 'resources/view/template/footer.php'; ?>

</html>
<?php

} else {
    header("location:login.php");
}