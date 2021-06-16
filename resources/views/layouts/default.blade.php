<!DOCTYPE html>
<html lang="en">

<head>


 {{-- style --}}
@include('includes.styleHome')

  <!-- =======================================================
  * Template Name: BizLand - v3.3.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

{{-- top and head --}}
@include('includes.headHome')
{{-- hero --}}
{{-- bagian hero ini yang nanti buat maps --}}
<section id="hero" class="d-flex align-items-center">
    @yield('hero')
</section>


  <!-- End #main -->

{{-- footer --}}
@include('includes.footerHome')
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

{{-- script --}}
@include('includes.scriptHome')

</body>

</html>