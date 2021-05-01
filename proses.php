
<?php
  // Menangkap isi variabel dari form.php
  $nmWilayah = $_POST['nmWilayah'];
  $jmlpositif= $_POST['jmlpositif'];
  $jmlrawat = $_POST['jmlrawat'];
  $jmlsembuh = $_POST['jmlsembuh'];
  $jmlmeninggal = $_POST['jmlmeninggal'];
  $operator = $_POST['operator'];
  $nim = $_POST['nim'];

  date_default_timezone_set('Asia/Jakarta');
  $today = date("j M Y G:i:s");
 
  // Format data yang akan diparsing
   
   $data = "\n                    Data Pantauan Covid19 Wilayah $nmWilayah
                             Per $today
                     $operator | $nim
 ________________________________________________________________________________
|      Positif      |      Dirawat      |      Sembuh      |      Meninggal      |
|___________________|___________________|__________________|_____________________|
|      $jmlpositif      |       $jmlrawat       |      $jmlsembuh     |        $jmlmeninggal        |           
|___________________|___________________|__________________|_____________________|";

  // Buka file data.txt, kemudian tuliskan isi variabel di atas kedalam data.txt
  $fh = fopen("data.txt", "a");
  fwrite($fh, $data);

  // Tutup file data.txt
  fclose($fh);

  // Keterangan bila data berhasil diinput
  print "Data Telah Tersimpan.</br><a href='form.php'>Kembali ke Form >></a>";

?>