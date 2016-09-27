<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accidents</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
  </head>
  <body>
<?php include 'header.php'; ?>
    <?php include 'prone-report.php'; ?>
  <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 main" style="padding-right: 0px;padding-left: 0px;">

    <div class="map" id="map" style="margin-bottom:20px;">
    </div>

  </div>

  </body>
</html>
<?php include 'footer.php'; ?>

  <script type="text/javascript">

      var prone=<?php echo json_encode( $prone ) ?>;

   </script>

  <script src="assets/js/prone-report.js" charset="utf-8"></script>
