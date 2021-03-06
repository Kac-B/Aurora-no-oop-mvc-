<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aurora - Register</title>

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

  <!-- jQuery -->
  <script src="resources/js/jquery.js"></script>

  <!-- Script -->
  <script src="resources/js/register.js"></script>

</head>

<body>

  <div class="brand">Aurora Creation</div>


  <!-- Navigation -->
  <?php require_once 'resources/view/template/header.php'; ?>


  <div class="container">
    <div class="row">
      <div class="box">
        <div class="col-lg-12">
          <hr>
          <h2 class="intro-text text-center">Registration
            <strong>form</strong>
          </h2>
          <div id="add_err2"></div>
          <hr>
          <form role="form">
            <div class="row">
              <div class="form-group col-lg-4">
                <label>First Name</label>
                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
              </div>
              <div class="form-group col-lg-4">
                <label>Last Name</label>
                <input type="text" id="lname" name="lname" maxlength="25" class="form-control">
              </div>
              <div class="form-group col-lg-4">
                <label>Email Address</label>
                <input type="email" id="email" name="email" maxlength="25" class="form-control">
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-lg-12">
                <label>Password</label>
                <input type="password" id="password" name="password" maxlength="10" class="form-control">
              </div>
              <div class="form-group col-lg-12">
                <button type="submit" id="register" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container -->
  <?php require_once 'resources/view/template/footer.php'; ?>
</body>

</html>