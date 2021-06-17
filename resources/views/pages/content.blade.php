  <!-- ======= Hero Section ======= -->
  {{-- <div class="container" data-aos="zoom-out" data-aos-delay="100">
    <h1>Welcome to <span>BizLand</span></h1>
    <h2>We are team of talented designers making websites with Bootstrap</h2>
    <div class="d-flex">
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
    </div>
  </div> --}}
  <!-- End Hero -->
  @extends('layouts.default')
  @section('content')
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1692764041536!2d106.82215111435201!3d-6.372134764104784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec04b217fe09%3A0x2f054fe3a0295245!2sPoliteknik%20Negeri%20Jakarta!5e0!3m2!1sid!2sid!4v1623887802355!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  @endsection

  {{-- <script type="text/javascript"
src="http://maps.google.com/maps/api/js?sensor=true&amp;key=ABQIAAAA8tt4eKTuBZMVnLJfP2BZrBT2yXp_ZAY8_ufC3CFXhHIE1NvwkxS4Rz1LFzG0odNPtk8VLkdrQF5grA"></scri
pt>


<script type="text/javascript">
  function initialize() {
if (GBrowserIsCompatible()) {
var map = new GMap2(document.getElementById("map_canvas"));
map.setCenter(new GLatLng(-6.4, 106.8186111), 13);
// Add 10 markers to the map at random locations
var bounds = map.getBounds();
var southWest = bounds.getSouthWest();
var northEast = bounds.getNorthEast();
var lngSpan = northEast.lng() - southWest.lng();
var latSpan = northEast.lat() - southWest.lat();
for (var i = 0; i < 10; i++) {
var point = new GLatLng(southWest.lat() + latSpan * Math.random(),
southWest.lng() + lngSpan * Math.random());
map.addOverlay(new GMarker(point));
}
}
}

var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
}
</script>

<div id="map_canvas" style="width:600px; height:600px"></div> --}}