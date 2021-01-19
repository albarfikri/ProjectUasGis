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
                 <li class="breadcrumb-item active" aria-current="page">Tabel Hotel</li>
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
         <div class="card">
           <!-- Card header -->

           <div class="card-header border-0">

             <h6 class="text-dark text-uppercase ls-1 mb-1">detail</h6>
             <h5 class="h3 text-black mb-0">Tabel Hotel</h5>

           </div>
           <!-- Light table -->
           <div class="table-responsive">
             <?php
              if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
<span class="alert-text"><strong>';
                echo $this->session->flashdata('pesan');
                echo '</strong></span>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>', '</div>';
              } ?>
             <table class="table align-items-center table-flush">
               <thead class="thead-light">
                 <tr>
                   <th scope="col" class="sort" data-sort="name">No</th>
                   <th scope="col" class="sort" data-sort="budget">Nama hotel</th>
                   <th scope="col" class="sort" data-sort="status">Alamat</th>
                   <th scope="col" class="sort" data-sort="status">Gambar</th>
                   <th scope="col">Bintang</th>
                   <th scope="col" class="sort" data-sort="completion">Status</th>
                   <th scope="col" class="sort" data-sort="completion">Keterangan</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody class="list">
                 <?php $no = 1;
                  foreach ($hotel as $key => $value) { ?>
                   <tr>
                     <td>
                       <?= $no++; ?>
                     </td>
                     <td class="budget">
                       <?= $value->nama_hotel; ?>
                     </td>
                     <td>
                       <?= $value->alamat; ?>
                     </td>
                     <td>
                       <img src="<?= base_url('assets/images/Hotel/'.$value->gambar); ?>" width="240px">
                     </td>
                     <td>
                       <strong>
                         <?= $value->bintang; ?>
                       </strong>
                     </td>
                     <td>
                       <span class="badge badge-dot mr-4">
                         <i class="bg-<?php if ($value->status == 'Negeri') {
                                        echo 'primary';
                                      } else {
                                        echo 'warning';
                                      } ?>"></i>
                         <strong>
                           <?= $value->status; ?>
                         </strong>
                       </span>
                     </td>
                     </td>
                     <td>
                       <?= $value->ket; ?>
                     </td>
                     <td class="align-center">
                       <a href="<?= base_url('hotel/edit/' . $value->id_hotel) ?>" class="btn btn-outline-success">Edit</button>
                         <a href="<?= base_url('hotel/delete/' . $value->id_hotel) ?>" class="btn btn-outline-danger" onclick="return confirm('Apakah data ingin dihapus ?')">Delete</button>
                     </td>
                   </tr>
                 <?php } ?>
               </tbody>
             </table>
           </div>
           <!-- Card footer -->
           <div class="card-footer py-4">
             <nav aria-label="...">
               <ul class="pagination justify-content-end mb-0">
                 <li class="page-item disabled">
                   <a class="page-link" href="#" tabindex="-1">
                     <i class="fas fa-angle-left"></i>
                     <span class="sr-only">Previous</span>
                   </a>
                 </li>
                 <li class="page-item active">
                   <a class="page-link" href="#">1</a>
                 </li>
                 <li class="page-item">
                   <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                 <li class="page-item">
                   <a class="page-link" href="#">
                     <i class="fas fa-angle-right"></i>
                     <span class="sr-only">Next</span>
                   </a>
                 </li>
               </ul>
             </nav>
           </div>
         </div>
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