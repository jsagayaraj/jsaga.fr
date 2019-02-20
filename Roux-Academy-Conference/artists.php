<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Roux Academy Conference 2013 -- Artists</title>

    <!-- Bootstrap link -->
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="_/css/style.css">
    
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="artist" data-spy="scroll" data-target=".scrollspy">
    <div class="container">
      <div class="content row">
        <div class="col-lg-12">
          <?php include ('_/php/header.php'); ?>
        </div><!-- col-lg-12 -->

        <!-- 8 colums -->
        <section class="main col col-lg-8">
          <?php include ('_/php/article-artistlist.php'); ?>
        </section><!-- main -->

        <!-- 4 colums -->
        <section class="sidebar col col-lg-4">
          <?php include ('_/php/aside-register.php'); ?>
          <?php include ('_/php/aside-lastyear.php'); ?>
        </section><!-- sidebar -->
        
        <?php include ('_/php/footer.php'); ?>
      </div><!-- content -->
    </div><!-- container -->
  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="_/js/jquery.js"></script>
    <script  src="_/js/bootstrap.js"></script>
    <script  src="_/js/main.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script>-->
    
  </body>
</html>