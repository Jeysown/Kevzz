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
  <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 main" style="padding-right: 0px;padding-left: 0px;">

    <div class="map" id="map" style="margin-bottom:20px;">
    </div>

  </div>

      <div class="container">
        <div class="row">
          <table class="table" id="tab1" >
                  <thead>
                      <tr class="filters">
                          <th>Status</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Latitude and Longtitude</th>
                          <th>Message</th>
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
                            $output .= "<td> <a href='javascript:map.panTo(new google.maps.LatLng(".$all[$i][3].",".$all[$i][4]."));map.setZoom(16);' onclick='backtotop();'>" .$all[$i][3].", and ".$all[$i][4]. "</td>";
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


<?php include 'footer.php'; ?>
<script type="text/javascript">

    var All=<?php echo json_encode( $all ) ?>;

 </script>

<script src="assets/js/maps-reports.js" charset="utf-8"></script>
