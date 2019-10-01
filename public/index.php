<?php

if (!session_id()) {
   session_start();
}
// memanggil initial Aplikasi
require_once '../app/init.php';

// membuat dan membangun aplikasi
$app = new App;
