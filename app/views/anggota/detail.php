<br>

<div class="container p-2 mt-5">
   <div class="card" style="width: 18rem;">
      <div class="card-body">
         <h5 class="card-title"><?= $data['siswa']['nama']; ?></h5>
         <h6 class="card-subtitle mb-2 text-muted"><?= $data['siswa']['nis']; ?></h6>
         <p class="card-text"><?= $data['siswa']['email']; ?></p>
         <p class="card-text"><?= $data['siswa']['kelas']; ?></p>
         <a href=" <?= BASEURL; ?>/anggota" class="btn btn-primary card-link float-right">Kembali ke daftar</a>
      </div>
   </div>
</div>