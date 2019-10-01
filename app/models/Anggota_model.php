<?php
class Anggota_model
{

   private $host = DB_HOST;
   private $user = DB_USER;
   private $pass = DB_PASS;
   private $db_name = DB_NAME;

   private $dbh;
   private $stmt;


   public function __construct()
   {
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
      try {
         $this->dbh = new PDO($dsn, $this->user, $this->pass);
      } catch (PDOException $e) {
         die($e->getMessage());
      }
   }

   public function getAllAnggota()
   {
      $this->stmt = $this->dbh->prepare('SELECT * FROM anggota');
      $this->stmt->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
   }
   public function getAnggotaById($id)
   {
      $this->stmt = $this->dbh->prepare('SELECT * FROM anggota WHERE id=' . $id);
      $this->stmt->execute();
      return $this->stmt->fetch(PDO::FETCH_ASSOC);
   }
   public function tambahDataAnggota($data)
   {
      $nama = $data["nama"];
      $nis = $data["nis"];
      $email = $data["email"];
      $kelas = $data["kelas"];

      $query = "INSERT INTO anggota
                  VALUES
         ('', '$nama', '$nis','$email','$kelas')";

      $this->stmt = $this->dbh->prepare($query);
      $this->stmt->execute();

      return $this->stmt->rowCount();
   }

   public function hapusDataAnggota($id)
   {
      $query = "DELETE FROM anggota WHERE id=$id";
      $this->stmt = $this->dbh->prepare($query);
      $this->stmt->execute();

      return $this->stmt->rowCount();
   }


   public function ubahDataAnggota($data)
   {
      $id = $data["id"];
      $nama = $data["nama"];
      $nis = $data["nis"];
      $email = $data["email"];
      $kelas = $data["kelas"];

      $query = "UPDATE anggota SET
         id = '$id',
         nama = '$nama',
         nis = '$nis',
         email = '$email',
         kelas = '$kelas'
         WHERE id = '$id'
         ";

      $this->stmt = $this->dbh->prepare($query);
      $this->stmt->execute();

      return $this->stmt->rowCount();
   }

   public function cariDataAnggota()
   {
      $keyword = $_POST['keyword'];
      $query = "SELECT * FROM anggota WHERE nama LIKE '%$keyword%'";

      $this->stmt = $this->dbh->prepare($query);
      $this->stmt->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
   }
}
