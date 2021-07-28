<?php
include '../conn.php';
$folder = "gambar_admin/";
if (isset($_POST['submit'])) {
  $nama           = $_POST['nama'];
  $pekerjaan      = $_POST['pekerjaan'];
  $dept           = $_POST['dept'];
  $id_employee    = $_POST['id_employee'];
  $date           = $_POST['date'];
  $judul          = $_POST['judul'];
  $biaya          = $_POST['biaya'];
  $ketsatu        = $_POST['ketsatu'];
  $ketdua         = $_POST['ketdua'];
  $location = "gambar_admin/";
  $file1 = $_FILES['sebelum']['name'];
  $file_tmp1 = $_FILES['sebelum']['tmp_name'];
  $file2 = $_FILES['sebelum2']['name'];
  $file_tmp2 = $_FILES['sebelum2']['tmp_name'];
  $data = [];
  $data = [$file1, $file2];
  $query =   "INSERT INTO karyawan (nama,pekerjaan,dept,id_employee,date,judul,biaya,images,images2,ketsatu,ketdua)VALUES('$nama','$pekerjaan','$dept','$id_employee','$date','$judul','$biaya','$file1','$file2','$ketsatu','$ketdua')";
  $fire = mysqli_query($koneksi, $query);
  if ($fire) {
    move_uploaded_file($file_tmp1, $location . $file1);
    move_uploaded_file($file_tmp2, $location . $file2);
    // echo "<script>alert('Anda Berhasil Menambah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=input-karyawan.php?alert=1">';
  } else {
    // echo "<script>alert('Anda Berhasil Menambah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=input-karyawan.php?alert=1">';
  }
} else {
  $id = $_GET['id'];
  $hapus = mysqli_query($koneksi, " DELETE FROM karyawan WHERE id = '$id' ");
  if ($hapus) {
    echo "<script>alert('Anda Berhasil Menghapus Data')</script>";
    header("location:karyawan.php?alert=success");
  } else {
    echo "<script>alert('Anda Gagal Menghapus Data')</script>";
    header("location:karyawan.php?alert=success");
  }
}
