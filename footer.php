<script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolqrs1RmBOGIJIu4rIe4SJFA6CB1lI58&callback=initMap"></script>

    <!-- checkall -->
    <script type="text/javascript">
    $("#tab1 #checkAll").click(function () {
      if ($("#tab1 #checkAll").is(':checked')) {
          $("#tab1 input[type=checkbox]").each(function () {
              $(this).prop("checked", true);
          });

      }
      else {
          $("#tab1 input[type=checkbox]").each(function () {
              $(this).prop("checked", false);
          });
      }
    });
    </script>
    <script type="text/javascript">
    $("#tab1 #checkone").click(function () {
      if ($("#tab1 #checkone").is(':checked')) {
          $("#tab1 #checkAll").each(function () {
              $(this).prop("checked", false);
          });

      }
      else {
          $("#tab1 #checkAll").each(function () {
              $(this).prop("checked", false);
          });
      }
    });
    </script>
    <!-- check all -->
