<div class="container p-5 mt-5">

   <div class="row">
      <div class="col-lg-6">
         <?php Flasher::flash() ?>
      </div>
   </div>
   <!-- Button trigger modal -->
   <div class="row mb-3">
      <div class="col-lg-6">
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
            Tambah Anggota
         </button>
      </div>
   </div>

   <!-- Search -->
   <div class="row mb-3">
      <div class="col-lg-6">
         <form action="<?= BASEURL; ?>/anggota/cari" method="post">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="cari nama anggota.." name="keyword" id="keyword" autocomplete="off">
               <div class="input-group-append">
                  <button class="btn btn-primary float-right" type="submit" id="cari">Cari<button>
               </div>
            </div>
         </form>
      </div>
   </div>


   <div class="row">
      <div class="col-lg-6">
         <h3 class="text-dark">Daftar Anggota</h3>
         <ul class="list-group">

            <?php foreach ($data['siswa'] as $sw) : ?>
               <li class="list-group-item">
                  <?= $sw['nama']; ?>
                  <a href=" <?= BASEURL; ?>/anggota/hapus/<?= $sw['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm ('Yakin akan menghapus data?')">Hapus</a>

                  <a href=" <?= BASEURL; ?>/anggota/ubah/<?= $sw['id']; ?>" class="badge badge-success float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $sw['id']; ?>">Ubah</a>

                  <a href=" <?= BASEURL; ?>/anggota/detail/<?= $sw['id']; ?>" class="badge badge-primary float-right ml-2">Detail</a>
               </li>
            <?php endforeach; ?>

         </ul>
      </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title tombolTambahData" id="formModalLabel">Tambah Data Anggota</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action=" <?= BASEURL ?>/anggota/tambah" method="post">
               <input type="hidden" name="id" id="id">
               <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
               </div>
               <div class="form-group">
                  <label for="nis">NISN</label>
                  <input type="number" class="form-control" id="nis" name="nis" autocomplete="off">
               </div>
               <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" autocomplete="off">
               </div>
               <div class="form-group">
                  <label for="kelas">Kelas</label>
                  <select class="form-control" id="kelas" name="kelas">
                     <option value="8U 1">8U 1</option>
                     <option value="8U 2">8U 2</option>
                     <option value="8U 3">8U 3</option>
                  </select>
               </div>

         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
         </div>
      </div>
   </div>
</div>