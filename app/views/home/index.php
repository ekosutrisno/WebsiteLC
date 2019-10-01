<div class="container-fluid-lg">
   <div id="carouselExampleIndicators" class="carousel slide h-70" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active" style="">
            <img src="<?= BASEURL; ?>/img/pic/6.jpg" class="d-block w-100">
            <div class=" carousel-caption d-md-block cr-top">
               <h3 class="display-4 font-weight-lighter">Selamat datang diWebsite<br>
                  <span class="font-weight-bold">LAUNA CENDIKIA</span>
               </h3>
               <p class="p-1">www.launa-cendikia.co.id</p>
               <!-- <p class="lead mt-3">Halo,<?= $data['nama']; ?></p> -->
               <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- tentang -->
<section style="" id="about" class="about bg-light p-4">
   <div class="container">
      <div class="row mb-5">
         <div class="col text-center">
            <!-- <img src=" <?= BASEURL; ?>/img/l1.png" width="150" class="mb-3"> -->
            <h2>TENTANG PENGEMBANG</h2>
            <hr width="50%">
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-md-5 text-justify">
            <h3 class="">Biografi</h3>
            <p>
               Launa Cendikia merupakan ekstrakulikuler unggulan di MTs Negeri 2 Bandar Lampung yang membidangi kejurnalisan. Kegiatan yang dan pembelajaran yang dilakukan berkenaan dengan Photografi, Editor Berita sekolah, penerbitan majalah sekolah, serta ikut aktif dalam ajang perlombaan bergengsi bertema kejurnalisan
            </p>
         </div>
         <div class="col-md-5 text-justify">
            <h3 class="">Pendidikan</h3>
            <p>Artikel adalah karangan faktual secara lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan di
               media online maupun cetak (melalui koran, majalah, buletin, dsb) dan bertujuan menyampaikan gagasan dan
               fakta yang dapat meyakinkan, mendidik, dan menghibur. Artikel adalah karangan faktual secara lengkap dengan
               panjang tertentu yang dibuat untuk dipublikasikan di media online maupun cetak (melalui koran, majalah,
               buletin, dsb) dan bertujuan menyampaikan gagasan dan fakta yang dapat meyakinkan, mendidik, dan menghibur.
            </p>
         </div>
      </div>
   </div>
</section>

<!-- portofolio -->
<section id="portofolio" class="portofolio  pb-5">
   <div class="container">
      <div class="row mb-5 pt-4">
         <div class="col text-center">
            <!-- <img src="img/2.png" width="120" class="rounded-circle img-thumbnail"> -->
            <h2>Portofolio</h2>
            <hr width="50%">
         </div>
      </div>

      <div class="row mb-5 ml-auto">
         <div class="col-md">
            <div class="card ro-1 shadow p-3 mb-5 bg-white rounded">
               <img src="<?= BASEURL; ?>/img/pic/1.jpg" class="card-img-top">
               <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                     content.</p>
                  <button class="btn btn-outline-primary btn-sm float-right">Lebih lanjut</button>
               </div>
            </div>
         </div>
         <div class="col-md">
            <div class="card ro-1 shadow p-3 mb-5 bg-white rounded">
               <img src="<?= BASEURL; ?>/img/pic/4.jpg" class="card-img-top">
               <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                     content.</p>
                  <button class="btn btn-outline-primary btn-sm float-right">Lebih lanjut</button>
               </div>
            </div>
         </div>
         <div class="col-md">
            <div class="card ro-1 shadow p-3 mb-5 bg-white rounded">
               <img src="<?= BASEURL; ?>/img/pic/3.jpg" class="card-img-top">
               <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                     content.</p>
                  <button class="btn btn-outline-primary btn-sm float-right">Lebih lanjut</button>
               </div>
            </div>
         </div>
      </div>
</section>

<!-- section kontak -->
<section id="kontak" class="kontak p-5 bg-light">
   <div class="container">
      <div class="row pt-4 mb-4">
         <div class="col text-center pt-4">
            <h2>Kontak<i class="fas fa-phone ml-2"></i></h2>
            <hr width="50%">
         </div>
      </div>
      <div class="row">
         <div class="col-lg-5 offset-1">
            <div class="card ro-2 text-white bg-dark mb-3">
               <div class="card-body text-center">
                  <h5 class="card-title">Hubungi Kami</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                     content.</p>
               </div>
            </div>
            <ul class="list-group">
               <li class="list-group-item">
                  <h1>Alamat sekolah</h1>
                  <h5>Telp. 0823-7192-8902</h5>
               </li>
               <li class="list-group-item">Alamat:</li>
               <li class="list-group-item">Jl. Pandawa Raya No.5</li>
               <li class="list-group-item">Sukarame, Bandar Lampung</li>
               <li class="list-group-item">Indonesia</li>
            </ul>
         </div>
         <div class="col-lg-5 p-3">
            <form>
               <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" aria-describedby="tulisnama" placeholder="masukan nama...">
                  <small id="namahelp" class="form-text text-muted">Tuliskan nama dengan lengkap</small>
               </div>
               <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="masukkan email...">
                  <small id="namahelp" class="form-text text-muted">ex: ekosutrisno801@gmail.com</small>
               </div>
               <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="pasword...">
               </div>
               <div class="form-group">
                  <label for="saran">Saran dan masukan</label>
                  <textarea id="saran" class="form-control" rows="5" placeholder="Masukkan pesan dan saran"></textarea>
               </div>
               <button type="submit" class="btn btn-primary">Kirim saran</button>
            </form>

         </div>
      </div>
   </div>
</section>


<!-- footer -->
<!-- <footer class="bg-dark p-5" style="min-height:40vh">
   <div class="container text-center text-white">
      <div class="row">
         <div class="col-sm-12">
            <p> Copyright &copy; 2019 | bulit with <i class="glyphicon glyphicon-heart"></i> By: <a href="http://instagram.com/eko_sutrisno96">launa-cendikia</a></p>
         </div>
      </div>

      <div class="row">
         <div class="col-sm-12">
            <a href="https://www.youtube.com/channel/UC6j_oQGoNpxVC6SWxsEvV9g?view_as=subscriber" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i> Please Subcribe My Channel</a>
         </div>
      </div>

      <div class="row p-3 m-4">
         <div class="col-sm-6 ">
            <ul class="d-bloc">
               <li class="" style="list-style:none;"><a class="text-white" href="">Kementrian agama</a></li>
               <li class="" style="list-style:none;"><a class="text-white" href="">Dinas Pendidikan</a></li>
            </ul>
         </div>
         <div class="col-sm-6">
            <ul class="d-block">
               <li class="" style="list-style:none;"><a class="text-white" href="">Website MTs N 2 Bandar Lampung</a></li>
               <li class="" style="list-style:none;"><a class="text-white" href="">Ekskul Pramuka</a></li>
               <li class="" style="list-style:none;"><a class="text-white" href="">Ekskul Rohis</a></li>
               <li class="" style="list-style:none;"><a class="text-white" href="">Ekskul KSR</a></li>
               <li class="" style="list-style:none;"><a class="text-white" href="">Ekskul Olahraga</a></li>
            </ul>
         </div>
      </div>


   </div>
</footer> -->
<!-- akhir footer -->