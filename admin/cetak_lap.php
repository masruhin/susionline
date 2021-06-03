<?php
include '../conn.php';
$id = $_GET['id'];
$i = 1;
$query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id='$id'");
// $data  = mysqli_fetch_array($query);
while ($row = mysqli_fetch_array($query)) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .gambar {
      width: 100%;
      height: 77px;
      display: flex;
      align-items: flex-start;
      text-align: center;
      margin: 0 auto;
    }

    img {
      /* display: block; */
      text-align: center;
      margin-left: 300px;
      margin-right: auto;
      width: 20%;
      height: auto;
      display: flex;
      align-self: center;
      margin: 0 auto;

    }

    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 5px;
      text-align: left;
    }
  </style>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan</title>
<link rel="stylesheet" type="text/css" href="../dist/css/laporan.css" />

<body>
  <div class="gambar">
    <img src="gambar_admin/logo_mercedes_Benz_New.png" alt="" class="center">
  </div>
  <div id="title">
    <h3>
      <center>USULAN PERBAIKAN / SUGGESTION SUBMISSION</center>
    </h3>
  </div>
  <br>
  <!-- <hr width="60%"><br> -->
  <h4>1. Data pengajuan / Submitter Data</h4>
  <div id="isi">
    <table width="100%" border="1" cellpadding="3" cellspacing="0" margin-left="20px" padding-left="3px">
      <thead>
        <tr align="center">
          <th width="80px" style="text-align: center;">Nama / <em style="color: blue;"> Name</em></th>
          <th width="80px" style="text-align: center;"><?php echo $data['id']; ?></th>
          <th width="80px" style="text-align: center;">Pers. No</th>
          <th width="80px" style="text-align: center;">10343</th>
          <th width="80px" style="text-align: center;" colspan="2">Tanda Tangan / <em style="color: blue;">Sign</em></th>
        </tr>
        <tr align="center">
          <th width="80px" height="50px" style="text-align: center;">Pekerjaan / <em style="color: blue;">Job</em></th>
          <th width="80px" height="50px" style="text-align: center;"><?php echo $data['nama']; ?></th>
          <th width="80px" height="50px" style="text-align: center;">Tgl. Diterima Manager</th>
          <th width="80px" height="50px" style="text-align: center;">10 Maret 2021</th>
          <th width="80px" height="50px" style="text-align: center;">Pengusul / <em style="color: blue;">Submitter</em></th>
          <th width="80px" height="50px" style="text-align: center;">Atasan Langsung</th>
        </tr>
        <tr align="center">
          <th width="80px" height="50px" style="text-align: center;">Dept / <em style="color: blue;">CC</em></th>
          <th width="80px" height="50px" style="text-align: center;">APC</th>
          <th width="80px" height="50px" style="text-align: center;">Tgl. Diterima Tim SS</th>
          <th width="80px" height="50px" style="text-align: center;">10 Maret 2021</th>
          <th width="80px" height="50px" style="text-align: center;">Pengusul / <em style="color: blue;">Submitter</em></th>
          <th width="80px" height="50px" style="text-align: center;">Atasan Langsung</th>
        </tr>
      </thead>
    </table>
  </div>
  <br><br>
  <h4>2. Usulan / Suggestion</h4>
  <div>
    <thead>

    </thead>
  </div>
</body>

</html>