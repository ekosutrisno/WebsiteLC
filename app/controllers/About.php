<?php
class About extends Controller
{
   public  function index()
   {
      $data['judul'] = 'About';
      $this->view('templates/header', $data);
      $this->view('about/index');
      $this->view('templates/footer');
   }

   public function page()
   {
      $data['judul'] = 'Kegiatan';
      $this->view('templates/header', $data);
      $this->view('about/kegiatan');
      $this->view('templates/footer');
   }

   public function prestasi()
   {
      $data['judul'] = 'Prestasi';
      $this->view('templates/header', $data);
      $this->view('about/prestasi');
      $this->view('templates/footer');
   }
   public function kontak()
   {
      $data['judul'] = 'Kontak';
      $this->view('templates/header', $data);
      $this->view('about/kontak');
      $this->view('templates/footer');
   }
}
