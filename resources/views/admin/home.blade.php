<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../admin/assets/" data-template="vertical-menu-template-free">

<head>
  @include('admin.css')
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">



      <!-- Menu -->

      @include('admin.sidebar')

      <!-- / Menu -->

      <!-- Layout container -->


      @include('admin.body')

    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

  </div>
  <!-- / Layout wrapper -->

  @include('admin.script')


</body>

</html>