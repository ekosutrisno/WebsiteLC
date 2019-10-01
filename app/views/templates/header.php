<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title> <?= $data['judul']; ?> </title>
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
   <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?= BASEURL; ?>/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">

   <style>
      .ro-1,
      .ro-2 {
         cursor: pointer;
         transition: .2s;
      }

      .ro-1:hover {
         /* transform: scale(1.01); */
         transform: rotate(5deg);
         box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.2);
      }

      .ro-2:hover {
         transform: scale(1.01);
      }

      .carousel-item .display-4 {
         margin-top: -450px;
      }
   </style>

</head>

<body class="mt-5">
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
         <a class="navbar-brand mr-5" href="" class="pd-1">
            <h2 class="">Launa Cendikia</h2>
         </a>
         <!-- <a class="navbar-brand mr-5" href="<?= BASEURL ?>"><img src="<?= BASEURL ?>/img/l1.png" width="80" class="pd-1"></a> -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
               <a class="nav-item nav-link active ml-2" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
               <a class="nav-item nav-link ml-2" href="<?= BASEURL; ?>/about">About</a>
               <a class="nav-item nav-link ml-2" href="<?= BASEURL; ?>/about/page">Prestasi</a>
               <a class="nav-item nav-link ml-2" href="<?= BASEURL; ?>/about/prestasi">Kegiatan</a>
               <a class="nav-item nav-link ml-2" href="<?= BASEURL; ?>/about/kontak">Kontak</a>
               <a class="nav-item nav-link ml-2" href="<?= BASEURL; ?>/anggota">Anggota</a>
            </div>
         </div>
      </div>
   </nav>