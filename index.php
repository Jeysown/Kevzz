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
    <?php include 'report-access.php'; ?>
    <div class="col-lg-12">
      <div class="container">
        <div class="row">
          <table class="table" id="tab1">
                  <thead>
                      <tr class="filters">
                          <th><input type="text" class="form-control" placeholder="Status" ></th>
                          <th><input type="text" class="form-control" placeholder="Date" ></th>
                          <th><input type="text" class="form-control" placeholder="Time" ></th>
                          <th><input type="text" class="form-control" placeholder="Latitude" ></th>
                          <th><input type="text" class="form-control" placeholder="Longtitude" ></th>
                          <th><input type="text" class="form-control" placeholder="Message" ></th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                      $output='';

                            for ($i=0; $i < count($all) ; $i++) {
                              $output .="<tr>";
                              ?>
                        <?php
                            $output .= "<td>" .$all[$i][0]. "</td>";
                            $output .= "<td>" .$all[$i][1]. "</td>";
                            $output .= "<td>" .$all[$i][2]. "</td>";
                            $output .= "<td>" .$all[$i][3]. "</td>";
                            $output .= "<td>" .$all[$i][4]. "</td>";
                            $output .= "<td>" .$all[$i][5]. "</td>";
                          ?>
                            <?php
                                  $output .= "</tr>";
                        }
                          echo $output;
                        ?>
                  </tbody>
          </table>

        </div>
      </div>
    </div>
  </body>
</html>
<?php include 'footer.php'; ?>
