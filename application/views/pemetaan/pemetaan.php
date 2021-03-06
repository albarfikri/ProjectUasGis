      <!-- Header -->
      <div class="header bg-primary pb-6">
          <div class="container-fluid">
              <div class="header-body">
                  <div class="row align-items-center py-4">
                      <div class="col-lg-6 col-7">
                          <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
                          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Pemetaan Map</li>
                              </ol>
                          </nav>
                      </div>
                      <div class="col-lg-6 col-5 text-right">
                          <a href="#" class="btn btn-sm btn-neutral">New</a>
                          <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Page content -->
      <div class="container-fluid mt--6">
          <div class="row">
              <div class="col">

                  <div id="mapid" style="width: stretch; height: 700px;"></div>
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

                      //Kategori
                      var Kategorisasi = [];

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

                      var Allhotel = L.layerGroup();
                      var b1 = L.layerGroup();
                      var b2 = L.layerGroup();
                      var b3 = L.layerGroup();
                      var b4 = L.layerGroup();
                      var b5 = L.layerGroup();

                      //Search Peta
                      // var mymap = new L.Map('mapid', {
                      //     zoom: 10,
                      //     center: new L.latLng(0.510440, 101.438309)
                      // }); //set center from first location

                      var data = [
                          <?php foreach ($hotel as $key => $value) { ?> {
                                  "gambar": "<?= $value->gambar ?>",
                                  "address": "<?= $value->alamat ?>",
                                  "bintang": "<?= $value->bintang ?>",
                                  "status": "<?= $value->status ?>",
                                  "lon": "<?= $value->lon ?>",
                                  "lat": "<?= $value->lat ?>",
                                  "alamat": [<?= $value->lat ?>, <?= $value->lon ?>],
                                  "nama_hotel": "<?= $value->nama_hotel ?>"
                              },
                          <?php } ?>
                      ];

                      var markersLayer = new L.LayerGroup(); //isi konten

                      mymap.addLayer(markersLayer);

                      var controlSearch = new L.Control.Search({
                          position: 'topright',
                          layer: markersLayer,
                          initial: false,
                          zoom: 19,
                          marker: false
                      });

                      mymap.addControl(controlSearch);

                      for (i in data) {
                          var nama_hotel = data[i].nama_hotel;
                          var gambar = data[i].gambar;
                          var address = data[i].address;
                          var bintang = data[i].bintang; 
                          var status = data[i].status; 
                          var lon = data[i].lon; 
                          var lat = data[i].lat; 
                          var alamat = data[i].alamat; 
                          var marker = new L.Marker(new L.latLng(alamat), {
                              title: nama_hotel
                          }); 
                          marker.bindPopup("<h3>Detail Hotel</h3><table><tr><td colspan='3'><img src='<?= base_url('assets/images/Hotel/'); ?>"+gambar+"' width='220px'></td></tr>" +
                              "<tr><td></td><td></td><td></td></tr>" +
                              "<tr><td>Nama</td><td>:</td><td>"+nama_hotel+"</td></tr>" +
                              "<tr><td>Alamat</td><td>:</td><td>"+address+"</td></tr>" +
                              "<tr><td>Bintang</td><td>:</td><td><strong>"+bintang+"</strong></td></tr>" +
                              "<tr><td>Status</td><td>:</td><td><strong>"+status+"</strong></td></tr>" +
                              "<tr><td>Longitude</td><td>:</td><td>"+lon+"</td></tr>" +
                              "<tr><td>Latitude</td><td>:</td><td>"+lat+"</td></tr></table>");
                          markersLayer.addLayer(marker);
                      }


                      //icon point
                      var b11 = L.icon({
                          iconUrl: '<?= base_url('assets/icon/3.png'); ?>',
                          iconSize: [23, 42],
                          shadowSize: [50, 64],
                          iconAnchor: [22, 94],
                          shadowAnchor: [4, 62],
                          popupAnchor: [-3, -76]
                      });
                      var b12 = L.icon({
                          iconUrl: '<?= base_url('assets/icon/2.png'); ?>',
                          iconSize: [23, 42],
                          shadowSize: [50, 64],
                          iconAnchor: [22, 94],
                          shadowAnchor: [4, 62],
                          popupAnchor: [-3, -76]
                      });
                      var b13 = L.icon({
                          iconUrl: '<?= base_url('assets/icon/11.png'); ?>',
                          iconSize: [32, 45],
                          shadowSize: [50, 64],
                          iconAnchor: [22, 94],
                          shadowAnchor: [4, 62],
                          popupAnchor: [-3, -76]
                      });
                      var b14 = L.icon({
                          iconUrl: '<?= base_url('assets/icon/4.png'); ?>',
                          iconSize: [23, 42],
                          shadowSize: [50, 64],
                          iconAnchor: [22, 94],
                          shadowAnchor: [4, 62],
                          popupAnchor: [-3, -76]
                      });
                      var b15 = L.icon({
                          iconUrl: '<?= base_url('assets/icon/5.png'); ?>',
                          iconSize: [23, 42],
                          shadowSize: [50, 64],
                          iconAnchor: [22, 94],
                          shadowAnchor: [4, 62],
                          popupAnchor: [-3, -76]
                      });

                      //Point
                      <?php foreach ($hotel as $key => $value) { ?>

                          var hotel = L.marker([<?= $value->lat ?>, <?= $value->lon ?>]).addTo(Allhotel). //{icon:icon_hotel} letakan disebelah ],
                          bindPopup("<h3>Detail Hotel</h3><table><tr><td colspan='3'><img src='<?= base_url('assets/images/Hotel/' . $value->gambar); ?>' width='220x'></td></tr>" +
                              "<tr><td></td><td></td><td></td></tr>" +
                              "<tr><td>Nama</td><td>:</td><td><?= $value->nama_hotel ?></td></tr>" +
                              "<tr><td>Alamat</td><td>:</td><td><?= $value->alamat ?></td></tr>" +
                              "<tr><td>Bintang</td><td>:</td><td><strong><?= $value->bintang ?></strong></td></tr>" +
                              "<tr><td>Status</td><td>:</td><td><strong><?= $value->status ?></strong></td></tr>" +
                              "<tr><td>Longitude</td><td>:</td><td><?= $value->lon ?></td></tr>" +
                              "<tr><td>Latitude</td><td>:</td><td><?= $value->lat ?></td></tr></table>");

                      <?php } ?>
                      <?php foreach ($b1 as $key => $value) { ?>

                          var hotel1 = L.marker([<?= $value->lat ?>, <?= $value->lon ?>], {
                              icon: b11
                          }).addTo(b1). //{icon:icon_hotel} letak      an disebelah ],
                          bindPopup("<h3>Detail Hotel</h3><table><tr><td colspan='3'><img src='<?= base_url('assets/images/Hotel/' . $value->gambar); ?>' width='220x'></td></tr>" +
                              "<tr><td></td><td></td><td></td></tr>" +
                              "<tr><td>Nama</td><td>:</td><td><?= $value->nama_hotel ?></td></tr>" +
                              "<tr><td>Alamat</td><td>:</td><td><?= $value->alamat ?></td></tr>" +
                              "<tr><td>Bintang</td><td>:</td><td><strong><?= $value->bintang ?></strong></td></tr>" +
                              "<tr><td>Status</td><td>:</td><td><strong><?= $value->status ?></strong></td></tr>" +
                              "<tr><td>Longitude</td><td>:</td><td><?= $value->lon ?></td></tr>" +
                              "<tr><td>Latitude</td><td>:</td><td><?= $value->lat ?></td></tr></table>");

                      <?php } ?>

                      <?php foreach ($b2 as $key => $value) { ?>

                          var hotel2 = L.marker([<?= $value->lat ?>, <?= $value->lon ?>], {
                              icon: b12
                          }).addTo(b2). //{icon:icon_hotel} letakan disebelah ],
                          bindPopup("<h3>Detail Hotel</h3><table><tr><td colspan='3'><img src='<?= base_url('assets/images/Hotel/' . $value->gambar); ?>' width='220x'></td></tr>" +
                              "<tr><td></td><td></td><td></td></tr>" +
                              "<tr><td>Nama</td><td>:</td><td><?= $value->nama_hotel ?></td></tr>" +
                              "<tr><td>Alamat</td><td>:</td><td><?= $value->alamat ?></td></tr>" +
                              "<tr><td>Bintang</td><td>:</td><td><strong><?= $value->bintang ?></strong></td></tr>" +
                              "<tr><td>Status</td><td>:</td><td><strong><?= $value->status ?></strong></td></tr>" +
                              "<tr><td>Longitude</td><td>:</td><td><?= $value->lon ?></td></tr>" +
                              "<tr><td>Latitude</td><td>:</td><td><?= $value->lat ?></td></tr></table>");

                      <?php } ?>

                      <?php foreach ($b3 as $key => $value) { ?>

                          var hotel3 = L.marker([<?= $value->lat ?>, <?= $value->lon ?>], {
                              icon: b13
                          }).addTo(b3). //{icon:icon_hotel} letakan disebelah ],
                          bindPopup("<h3>Detail Hotel</h3><table><tr><td colspan='3'><img src='<?= base_url('assets/images/Hotel/' . $value->gambar); ?>' width='220x'></td></tr>" +
                              "<tr><td></td><td></td><td></td></tr>" +
                              "<tr><td>Nama</td><td>:</td><td><?= $value->nama_hotel ?></td></tr>" +
                              "<tr><td>Alamat</td><td>:</td><td><?= $value->alamat ?></td></tr>" +
                              "<tr><td>Bintang</td><td>:</td><td><strong><?= $value->bintang ?></strong></td></tr>" +
                              "<tr><td>Status</td><td>:</td><td><strong><?= $value->status ?></strong></td></tr>" +
                              "<tr><td>Longitude</td><td>:</td><td><?= $value->lon ?></td></tr>" +
                              "<tr><td>Latitude</td><td>:</td><td><?= $value->lat ?></td></tr></table>");

                      <?php } ?>
                      <?php foreach ($b4 as $key => $value) { ?>

                          var hotel4 = L.marker([<?= $value->lat ?>, <?= $value->lon ?>], {
                              icon: b14
                          }).addTo(b4). //{icon:icon_hotel} letakan disebelah ],
                          bindPopup("<h3>Detail Hotel</h3><table><tr><td colspan='3'><img src='<?= base_url('assets/images/Hotel/' . $value->gambar); ?>' width='220x'></td></tr>" +
                              "<tr><td></td><td></td><td></td></tr>" +
                              "<tr><td>Nama</td><td>:</td><td><?= $value->nama_hotel ?></td></tr>" +
                              "<tr><td>Alamat</td><td>:</td><td><?= $value->alamat ?></td></tr>" +
                              "<tr><td>Bintang</td><td>:</td><td><strong><?= $value->bintang ?></strong></td></tr>" +
                              "<tr><td>Status</td><td>:</td><td><strong><?= $value->status ?></strong></td></tr>" +
                              "<tr><td>Longitude</td><td>:</td><td><?= $value->lon ?></td></tr>" +
                              "<tr><td>Latitude</td><td>:</td><td><?= $value->lat ?></td></tr></table>");

                      <?php } ?>
                      <?php foreach ($b5 as $key => $value) { ?>

                          var hotel5 = L.marker([<?= $value->lat ?>, <?= $value->lon ?>], {
                              icon: b15
                          }).addTo(b5). //{icon:icon_hotel} letakan disebelah ],
                          bindPopup("<h3>Detail Hotel</h3><table><tr><td colspan='3'><img src='<?= base_url('assets/images/Hotel/' . $value->gambar); ?>' width='220x'></td></tr>" +
                              "<tr><td></td><td></td><td></td></tr>" +
                              "<tr><td>Nama</td><td>:</td><td><?= $value->nama_hotel ?></td></tr>" +
                              "<tr><td>Alamat</td><td>:</td><td><?= $value->alamat ?></td></tr>" +
                              "<tr><td>Bintang</td><td>:</td><td><strong><?= $value->bintang ?></strong></td></tr>" +
                              "<tr><td>Status</td><td>:</td><td><strong><?= $value->status ?></strong></td></tr>" +
                              "<tr><td>Longitude</td><td>:</td><td><?= $value->lon ?></td></tr>" +
                              "<tr><td>Latitude</td><td>:</td><td><?= $value->lat ?></td></tr></table>");

                      <?php } ?>


                      var geoj = L.layerGroup([kota])
                      var testing = L.layerGroup([hotel])
                      var marker = L.layerGroup([markersLayer])
                      var overlayMaps = {
                          "<strong>Search Point </strong>": marker,                   
                          "<strong>Bintang 1</strong>": b1,
                          "<strong>Bintang 2</strong>": b2,
                          "<strong>Bintang 3</strong>": b3,
                          "<strong>Bintang 4</strong>": b4,
                          "<strong>Bintang 5</strong>": b5,
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

              </div>
          </div>

          <!-- Footer -->
          <footer class="footer pt-0">
              <div class="row align-items-center justify-content-lg-between">
                  <div class="col-lg-6">
                      <div class="copyright text-center  text-lg-left  text-muted">
                          &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                          <li class="nav-item">
                              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                          </li>
                          <li class="nav-item">
                              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                          </li>
                          <li class="nav-item">
                              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                          </li>
                          <li class="nav-item">
                              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </footer>
      </div>