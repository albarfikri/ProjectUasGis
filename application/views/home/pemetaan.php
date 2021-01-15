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
                                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Tables</li>
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

                  <div id="mapid" style="width: stretch; height: 500px;"></div>
                  <script>
                      var mymap = L.map('mapid').setView([0.510440, 101.438309], 15);

                      L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                              'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                          id: 'mapbox/streets-v11',
                        
                      }).addTo(mymap);
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