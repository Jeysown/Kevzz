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
    <?php include 'temporary-access.php'; ?>
    <div class="col-lg-12">
      <div class="container">
        <div class="row">
          <table class="table" id="tab1">
                  <thead>
                      <tr class="filters">
                          <th><input type="checkbox" name="name" value="" name="checkAll" id="checkAll"></th>
                          <th><input type="text" class="form-control" placeholder="Status" ></th>
                          <th><input type="text" class="form-control" placeholder="Date" ></th>
                          <th><input type="text" class="form-control" placeholder="Time" ></th>
                          <th><input type="text" class="form-control" placeholder="Latitude" ></th>
                          <th><input type="text" class="form-control" placeholder="Longtitude" ></th>
                          <th><input type="text" class="form-control" placeholder="Message" ></th>
                          <th><input type="text" class="form-control" placeholder="Approve" ></th>
                          <th><input type="text" class="form-control" placeholder="Disapprove" ></th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                      $output='';

                            for ($i=0; $i < count($all) ; $i++) {
                              $output .="<tr>";
                              ?>
                        <?php
                            $output .= '<td> <input type="checkbox" name="specific_ids" value="" id="checkone"></td>';
                            $output .= "<td>" .$all[$i][0]. "</td>";
                            $output .= "<td>" .$all[$i][1]. "</td>";
                            $output .= "<td>" .$all[$i][2]. "</td>";
                            $output .= "<td>" .$all[$i][3]. "</td>";
                            $output .= "<td>" .$all[$i][4]. "</td>";
                            $output .= "<td>" .$all[$i][5]. "</td>";
                            $output .= '  <td><input type="button" onclick="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalApproveReport" style="padding:8px 12px;" value="Approve"  /></td>';
                            $output .= '<td><input type="button" onclick="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalDisapproveReport" style="padding:8px 12px;" value="Disapprove"/></td>';
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

    <!--  Modal Approve-->
    <div id="myModalApproveReport" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm">
				<div class="modal-content">
						<div class="modal-header" style="color:#b3cccc";>
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Are you sure you want to approve the report?</h4>
						</div>
						<div class="modal-footer">
							<input type="hidden" name="temp_id" id="temp_id">
							 <button type="submit" class="btn btn-primary">Yes</button>
							 <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
						</div>
				</div>
		</div>
  </div>
<!--  Modal Approve-->
<!--  Modal Disapprove-->
<div id="myModalDisapproveReport" class="modal fade" role="dialog">
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header" style="color:#b3cccc";>
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Are you sure you want to disapprove the report?</h4>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="temp_id" id="temp_id">
           <button type="submit" class="btn btn-primary">Yes</button>
           <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
        </div>
    </div>
</div>
</div>
<!--  Modal Disapprove-->
  </body>
</html>
<?php include 'footer.php'; ?>
