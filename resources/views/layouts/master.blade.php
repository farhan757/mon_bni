<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Galva - BNILife @yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('tema/skydash/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('tema/skydash/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('tema/skydash/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('tema/skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('tema/skydash/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('tema/skydash/js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('tema/skydash/css/vertical-layout-light/style.css') }}">
  <link rel="stylesheet" href="{{ asset('tema/skydash/vendors/jstree/dist/themes/default/style.min.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://sys.xptlp.co.id/favicon.ico" />
  @yield('css')
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts._navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('layouts._settings-panel')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('layouts._sidebar')
      <!-- partial -->
      <div class="main-panel">
        @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('tema/skydash/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('tema/skydash/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('tema/skydash/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('tema/skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('tema/skydash/js/dataTables.select.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('tema/skydash/js/off-canvas.js') }}"></script>
  <script src="{{ asset('tema/skydash/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('tema/skydash/js/template.js') }}"></script>
  <script src="{{ asset('tema/skydash/js/settings.js') }}"></script>
  <script src="{{ asset('tema/skydash/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('tema/skydash/js/dashboard.js') }}"></script>
  <script src="{{ asset('tema/skydash/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->
  <script src="{{ asset('tema/skydash/vendors/sweetalert/sweetalert.min.js') }}"></script>
  <script src="{{ asset('tema/skydash/vendors/jstree/dist/jstree.min.js') }}"></script>
  <script>
    $(function() {
          // 6 create an instance when the DOM is ready
          $('#jstree').jstree({
              "core": {
                "themes": {
                  "variant": "large"
                }
              }
            });
            // 7 bind to events triggered on the tree
            $('#jstree').on("changed.jstree", function(e, data) {
              console.log(data.selected);
            });
            // 8 interact with the tree - either way is OK
            $('button').on('click', function() {
              $('#jstree').jstree(true).select_node('child_node_1');
              $('#jstree').jstree('select_node', 'child_node_1');
              $.jstree.reference('#jstree').select_node('child_node_1');
            });
          });

        function hreff(urll) {
          window.location.href = urll;
        }
  </script>
  @yield('js')
</body>

</html>