<!-- ================ start footer Area ================= -->
<footer class="footer-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3  col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6>About Agency</h6>
          <p>
            The world has become so fast paced that people don’t want to stand by reading a page of information to be they would much rather look at a presentation and understand
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6>Navigation Links</h6>
          <div class="row">
            <div class="col">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Feature</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
              </ul>
            </div>
            <div class="col">
              <ul>
                <li><a href="#">Team</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3  col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6>Newsletter</h6>
          <p>
            For business professionals caught between high OEM price and mediocre print and graphic output.
          </p>
          <div id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
              <div class="input-group d-flex flex-row">
                <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
              </div>
              <div class="mt-10 info"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3  col-md-6 col-sm-6">
        <div class="single-footer-widget mail-chimp">
          <h6 class="mb-20">InstaFeed</h6>
          <ul class="instafeed d-flex flex-wrap">
            <li><img src="<?= base_url('assetsL/img/instagram/i1.jpg'); ?>" alt=""></li>
            <li><img src="<?= base_url('assetsL/img/instagram/i2.jpg'); ?>" alt=""></li>
            <li><img src="<?= base_url('assetsL/img/instagram/i3.jpg'); ?>" alt=""></li>
            <li><img src="<?= base_url('assetsL/img/instagram/i4.jpg'); ?>" alt=""></li>
            <li><img src="<?= base_url('assetsL/img/instagram/i5.jpg'); ?>" alt=""></li>
            <li><img src="<?= base_url('assetsL/img/instagram/i6.jpg'); ?>" alt=""></li>
            <li><img src="<?= base_url('assetsL/img/instagram/i7.jpg'); ?>" alt=""></li>
            <li><img src="<?= base_url('assetsL/img/instagram/i8.jpg'); ?>" alt=""></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="row align-items-center">
        <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
        <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-dribbble"></i></a>
          <a href="#"><i class="fab fa-behance"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<script>
  // Jenis Peta
  var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
      '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11'
  });

  var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
      '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/satellite-v9'
  });


  var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  });

  var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
      '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/dark-v10'
  });

  var mymap = L.map('mapid', {
    center: [0.510440, 101.438309],
    zoom: 13,
    layers: [peta3]
  });

  var baseMaps = {
    "Street": peta3,
    "Light": peta1,
    "Satellite": peta2,
    "Dark": peta4
  };


  //Point
  <?php foreach ($hotel as $key => $value) { ?>
    var hotel = L.marker([<?= $value->lat ?>, <?= $value->lon ?>]).addTo(mymap). //{icon:icon_hotel} letakan disebelah ],
    bindPopup("<h3>Detail Hotel</h3><table><tr><td colspan='3'><img src='<?= base_url('assets/images/Hotel/' . $value->gambar); ?>' width='220x'></td></tr>" +
      "<tr><td></td><td></td><td></td></tr>" +
      "<tr><td>Nama</td><td>:</td><td><?= $value->nama_hotel ?></td></tr>" +
      "<tr><td>Alamat</td><td>:</td><td><?= $value->alamat ?></td></tr>" +
      "<tr><td>Bintang</td><td>:</td><td><strong><?= $value->bintang ?></strong></td></tr>" +
      "<tr><td>Status</td><td>:</td><td><strong><?= $value->status ?></strong></td></tr>" +
      "<tr><td>Longitude</td><td>:</td><td><?= $value->lon ?></td></tr>" +
      "<tr><td>Latitude</td><td>:</td><td><?= $value->lat ?></td></tr></table>");

  <?php } ?>

  // geojson
  var kota = L.layerGroup();
  var geo = $.getJSON("<?= base_url('json/pekanbaru.json') ?>", function(data) {
    geoLayer = L.geoJson(data, {
      style: function(feature) {
        return {
          opacity: 0.5,
          color: 'gray',
          fillopacity: 1.0,
          fillcolor: 'blue',
        }
      },
    }).addTo(kota);

  });

  var geoj = L.layerGroup([kota])
  var cities = L.layerGroup([hotel]);

  var overlayMaps = {
    "<strong>Cities</strong>": cities,
    "<strong>Poligon Pekanbaru</strong>": geoj
  };


  L.control.layers(baseMaps, overlayMaps).addTo(mymap);


  //   var panelLayers = new L.Control.panelLayers(baseMaps, overlayMaps);
  //   mymap.addControl(panelLayers);

  //   var icon_hotel = L.icon({
  //       iconUrl:'<?= base_url('assets/icon/hotel.png') ?>',
  //       iconSize: [40,45],
  //   });
</script>
<!-- ================ End footer Area ================= -->
<script src="<?= base_url('assetsL/vendors/jquery/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?= base_url('assetsL/vendors/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assetsL/vendors/owl-carousel/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('assetsL//nice-select/jquery.nice-select.min.js'); ?>"></script>
<script src="<?= base_url('assetsL/js/jquery.ajaxchimp.min.js'); ?>"></script>
<script src="<?= base_url('assetsL//mail-script.js'); ?>"></script>
<script src="<?= base_url('assetsL/js/skrollr.min.js'); ?>"></script>
<script src="<?= base_url('assetsL/js/main.js'); ?>"></script>

</body>

</html>