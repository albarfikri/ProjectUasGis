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
                                  <li class="breadcrumb-item active" aria-current="page">Input Hotel</li>
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
              <div class="col-xl-8">
                  <div class="card bg-default">
                      <div class="card-header bg-transparent">
                          <div class="row align-items-center">
                              <div class="col">
                                  <h6 class="text-light text-uppercase ls-1 mb-1">detail</h6>
                                  <h5 class="h3 text-white mb-0">Peta Lokasi</h5>
                              </div>
                              <div class="col">

                              </div>
                          </div>
                      </div>
                      <div class="card-body">

                          <div id="mapid" style="width: stretch; height: 500px;"></div>

                      </div>
                  </div>
              </div>
              <div class="col-xl-4">
                  <div class="card">
                      <div class="card-header bg-transparent">
                          <div class="row align-items-center">
                              <div class="col">
                                  <h5 class="h3 mb-0">Input Data</h5>
                                  <h6 class="text-uppercase text-muted ls-1 mb-1">Hotel</h6>

                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <?php
                            //notifikasi jika form kosong
                            echo validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>', '</div>');
                            //notifikasi jika berhasil menyimpan data
                            if($this->session->flashdata('pesan')){
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                            <span class="alert-text"><strong>';
                            echo $this->session->flashdata('pesan');
                            echo '</strong></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>','</div>';
                            }

                            echo form_open('hotel/input'); ?>
                          <form>
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Nama Hotel</label>
                                  <input class="form-control" placeholder="Input nama hotel" type="text" value="<?= set_value('nama_hotel'); ?>" name="nama_hotel">
                              </div>
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Alamat</label>
                                  <input class="form-control" placeholder="Input alamat hotel" type="text" value="<?= set_value('alamat'); ?>" name="alamat">
                              </div>
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Bintang Hotel</label>
                                  <select class="form-control" name="bintang">
                                      <option>--Pilih bintang hotel--</option>
                                      <option value="5">5</option>
                                      <option value="4">4</option>
                                      <option value="3">3</option>
                                      <option value="2">2</option>
                                      <option value="1">1</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Status Hotel</label>
                                  <select class="form-control" name="status">
                                      <option>--Pilih status hotel--</option>
                                      <option value="Negeri">Negeri</option>
                                      <option value="Swasta">Swasta</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="example-number-input" class="form-control-label">Latitude</label>
                                  <input class="form-control" placeholder="Input latitude" type="text" value="<?= set_value('lat'); ?>" name="lat" id="Latitude">
                              </div>
                              <div class="form-group">
                                  <label for="example-number-input" class="form-control-label">Longitude</label>
                                  <input class="form-control" placeholder="Input Longitude" type="text" value="<?= set_value('lon'); ?>" name="lon" id="Longitude">
                              </div>
                              <div class="form-group">
                                  <label for="example-number-input" class="form-control-label">Gambar</label>
                                  <input class="form-control" placeholder="Input Longitude" type="file" value="<?= set_value('gambar'); ?>" name="gambar" id="gambar">
                              </div>
                              <div class="form-group">
                                  <label for="exampleFormControlTextarea1">Keterangan</label>
                                  <textarea class="form-control" name="ket" value="<?= set_value('ket'); ?>" rows="3"></textarea>
                              </div>
                              <div class="form-group">

                                  <labe></label>
                                      <button type="submit" class="btn btn-primary  btn-lg btn-block" type="button">Simpan</button>

                                      <button type="reset" class="btn btn-warning  btn-lg btn-block" type="button">Reset</button>
                              </div>
                          </form>
                          <?php echo form_close(); ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <script>
          var curLocation = [0, 0];
          if (curLocation[0] == 0 && curLocation[1] == 0) {
              curLocation = [0.510440, 101.438309];
          }

          var mymap = L.map('mapid').setView([0.510440, 101.438309], 15);
          L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
              attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                  '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                  'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
              id: 'mapbox/streets-v11'
          }).addTo(mymap);

          mymap.attributionControl.setPrefix(false);
          var marker = new L.marker(curLocation, {
              draggable: 'true'
          });

          marker.on('dragend', function(event) {
              var position = marker.getLatLng();
              marker.setLatLng(position, {
                  draggable: 'true'
              }).bindPopup(position).update();
              $("#Latitude").val(position.lat);
              $("#Longitude").val(position.lng).keyup();
          });

          $("#Latitude, #Longitude").change(function() {
              var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
              marker.setLatLng(position, {
                  draggable: 'true'
              }).bindPopup(position).update();
              mymap.panTo(position);
          });
          mymap.addLayer(marker);
      </script>


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