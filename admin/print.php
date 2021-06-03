<?php

use Mpdf\Mpdf;

require_once '../vendor/autoload.php';
include '../conn.php';
// date(format, timestamp);
$mpdf = new \Mpdf\Mpdf();
$id = $_GET['id'];
$i = 1;
$query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id='$id'");
while ($row = mysqli_fetch_array($query)) {
  $html =
    '<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        padding-top:1 em;
        padding-top:1px;

      }
      .form1 gambar {
        width: 100%;
        height: 77px;
        display: flex;
        align-items: flex-start;
        text-align: center;
        margin: 0 auto;
        font-size: 12px;
        padding-top:0px;

      }
      img {
        text-align: center;
        margin-left: 300px;
        margin-right: auto;
        width: 30%;
        height: auto;
        display: flex;
        align-self: center;
        margin: 0 auto;
        font-size: 12px;
        padding-top:0px;

      }
      table,
      th,
      td {
        border: 1px solid black;
        border-collapse: collapse;
        font-size: 12px;
      }
      table.grid{
      width:20.99cm ;
      font-size: 12px;
      border-collapse:collapse;
      }
      table.grid th{
        padding:5px;
      }
      table.grid th{
      background: #F0F0F0;
      border-top: 0.2mm solid #000;
      border-bottom: 0.2mm solid #000;
      text-align:center;
      border:1px solid #000;
      }
      table.grid tr td{
        padding:2px;
        border-bottom:0.2mm solid #000;
        border:1px solid #000;
      }

      th,
      td {
        padding: 5px;
        text-align: left;
        font-size: 12px;
      }
      h4{
        text-align: left;
      }
    </style>
  </head>
  <body>
  <div class="gambar">
  <img src="gambar_admin/logo_mercedes_Benz_New.png" alt="" class="center">
  </div>
  <div id="title">
  <h3 style="padding-top:1 em;">
  <center>USULAN PERBAIKAN / SUGGESTION SUBMISSION</center>
  </h3>
  </div>
  <h4 >1. Data pengajuan <em  style="color: blue;"> / Submitter Data</em></h4>
<div class="form1">
  <table class="grid "width="100%" border="0" cellpadding="3" cellspacing="0" margin-left="2px" padding-left="2px">
        <tr align="left">
          <th width="60px" style="text-align: left; height: 40px;">Nama / <em style="color: blue;"> Name</em></th>
          <th width="80px" style="text-align: left;">' . $row["nama"] . ' </th>
          <th width="80px" style="text-align: left;">Pers. No</th>
          <th width="80px" style="text-align: left;"></th>
          <th width="80px" style="text-align: left;" colspan="2">Tanda Tangan / <em style="color: blue;">Sign</em></th>
        </tr>
        <tr align="left">
          <th width="80px" height="50px" style="text-align: left;">Pekerjaan / <em style="color: blue;">Job</em></th>
          <th width="80px" height="50px" style="text-align: left;">' . $row["pekerjaan"] . ' </th>
          <th width="80px" height="50px" style="text-align: left;">Tgl. Diterima Manager</th>
          <th width="80px" height="50px" style="text-align: left;"></th>
          <th width="80px" height="50px" style="text-align: left;">Pengusul / <em style="color: blue;">Submitter</em></th>
          <th width="80px" height="50px" style="text-align: left;">Atasan Langsung</th>
        </tr>
        <tr align="left">
          <th width="80px" height="50px" style="text-align: left;">Dept / <em style="color: blue;">CC</em></th>
          <th width="80px" height="50px" style="text-align: left;">' . $row["dept"] . '</th>
          <th width="80px" height="50px" style="text-align: left;">Tgl. Diterima Tim SS</th>
          <th width="80px" height="50px" style="text-align: left;"></th>
          <th width="80px" height="50px" style="text-align: left;"></th>
          <th width="80px" height="50px" style="text-align: left;"></th>
        </tr>
  </table>

  <h4 >2. Usulan  <em style="color: blue;"> / Submitter Data </em></h4>
    <table class="grid" width="100%">
        <tr>Judul Usulan <em style="color: blue;"> / Suggestion tittle</em></tr>
          <tr align="left">
          <th width="230px" style="text-align: left; height: 40px;">Judul Usulan <em style="color: blue;"> / Suggestion tittle</em></th>
          <th width="250px" style="text-align: left;" colspan="3">' . $row["judul"] . ' </th>
        </tr>
        <tr align="left">
          <th width="230" style="text-align: left; height: 40px;" rowspan="3">Kategori Usulan <em style="color: blue;"> / Suggestion Category</em></th>
          <th style="text-align: left;"><input type="checkbox" class="custom-control-input" id="customCheck1" checked> <span>Kualitas / Quality</th>
          <th style="text-align: left;" colspan="2"><input type="checkbox" class="custom-control-input" id="customCheck1" checked> Lingkungan / <em style="color: blue;">Environment</em></th>
        </tr>
        <tr align="left">
          <th style="text-align: left;"><input type="checkbox" class="custom-control-input" id="customCheck1" checked><span> Produktivitas / <em>Produktivity</em></th>
          <th style="text-align: left;" colspan="2"><input type="checkbox" class="custom-control-input" id="customCheck1" checked> Sistem / <em style="color: blue;">System</em></th>
        </tr>
        <tr align="left">
          <th style="text-align: left;"><input type="checkbox" class="custom-control-input" id="customCheck1" checked><span> Keselamatan Kerja / <em>Safety</em></th>
          <th style="text-align: left;" colspan="2"><input type="checkbox" class="custom-control-input" id="customCheck1" checked> 5 - S  <em style="color: blue;"></em></th>
        </tr>
        <tr align="left">
          <th width="230" style="text-align: left; h
          eight: 40px;">Usaha Perbaikan <em style="color: blue;">  / Improvement Effort</em></th>
          <th style="text-align: left;" colspan="3"></th>
        </tr>
        <tr align="left">
          <th width="230" style="text-align: left; height: 40px;">Biaya Penerapan <em style="color: blue;">  / Impelementation Cost</em></th>
          <th style="text-align: left;" colspan="3">' . $row["biaya"] . '</th>
        </tr>
        <tr align="left">
          <th width="230" style="text-align: left; height: 40px;">Keuntungan <em style="color: blue;">  / Benefit</em></th>
          <th style="text-align: left;" colspan="3"></th>
        </tr>
        </table>
        </div>    
        
      <div>  
        <h4 >3. Analisa Data  <em style="color: blue;"> / Data Analysis </em></h4>
        <table  class="grid" width="100%" border="0" cellpadding="3" cellspacing="0" margin-left="2px" padding-left="2px">
        <tr align="left">
          <th width="230" style="text-align: left; height: 40px;" colspan="2" >Uraikan kondisi sebelum perbaikan dan sesudah perbaikan terkait dengan proses, dampak, biaya, dsb. <em style="color: blue;">/ Describe the condition before and after improvement in term of process, impact, cost etc </em></th>
        </tr>
        <tr align="left">
          <th width="350px"; style="text-align: center; height: 40px;">Sebelum <em style="color: blue;" colspan="6">  / Before</em></th>
          <th width="350px"; style="text-align: center; height: 40px;">Sesudah <em style="color: blue;">  / After</em></th>
        </tr>
        <tr align="left">
          <th width="350px"; style="text-align: center; height: 40px;"><img src="gambar_admin/' . $row["images"] . '" class="img-rounded" height="300" width="225" style="border: 2px solid #666666;" /></th>
          <th width="350px"; style="text-align: center; height: 40px;"><img src="gambar_admin/' . $row["images2"] . '" class="img-rounded" height="300" width="225" style="border: 2px solid #666666;" /></th>
        </tr>
        <tr align="left">
          <th width="350px"; style="text-align: left; height: 40px;">' . $row["ketsatu"] . '</th>
          <th width="350px"; style="text-align: left; height: 40px;">' . $row["ketdua"] . '</th>
        </tr>
        </table>
      </div>


    <h4 >4. Evaluasi Oleh Committee  <em style="color: blue;"> / Evaluated by Committee </em></h4>
    <table class="grid" width="100%">
        <tr>Tanggal<em style="color: blue;"> / Date</em></tr>
          <tr align="left">
          <th  style="text-align: left; height: 40px;">Tanggal<em style="color: blue;"> / Date</em></th>
          <th  style="text-align: left; height: 40px;">Penilai<em style="color: blue;"> / Assessor</em></th>
          <th  style="text-align: left; height: 40px;width:70px;">Ide<em style="color: blue;"> / Idea</em></th>
          <th  style="text-align: left; height: 40px;">Usaha<em style="color: blue;"> / Effort</em></th>
          <th  style="text-align: left; height: 40px;">Dampak<em style="color: blue;"> / Impact</em></th>
          <th  style="text-align: left; height: 40px;width:70px;">Penghematan<em style="color: blue;"> / Saving</em></th>
          <th  style="text-align: left; height: 40px;width:90px;">Biaya<em style="color: blue;"> / Cost</em></th>
          <th  style="text-align: left; height: 40px;width:90px;">Jumlah<em style="color: blue;"> / Total</em></th>
          <th  style="text-align: left; height: 40px;">Tanda Tangan<em style="color: blue;"> / sign</em></th>
          <th  style="text-align: left; height: 40px;">Rata-rata<em style="color: blue;"> / Average</em></th>
        </tr>

        <tr>Tanggal<em style="color: blue;"> / Date</em></tr>
          <tr align="left">
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;" rowspan="3"></th>
        </tr>
        <tr>Tanggal<em style="color: blue;"> / Date</em></tr>
          <tr align="left">
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
        </tr>
        
        <tr>Tanggal<em style="color: blue;"> / Date</em></tr>
          <tr align="left">
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
          <th  style="text-align: left; height: 30px;"></th>
        </tr>
        </table>
        </div>    
      <div>  
       <h4 >5. Masukan Komentar  <em style="color: blue;"> / Input Comment </em></h4>
        <table  class="grid" width="100%" border="0" cellpadding="3" cellspacing="0" margin-left="2px" padding-left="2px">
        <tr align="left">
          <th width="230" style="text-align: left; height: 100px;"></th>
        </tr>
        <tr align="left">
        </tr>
        </table>
        <p style="text-align:left">Terima kasih atas usulan perbaikan yang Anda lakukan. Kami selalu mengharapkan ide-ide Anda berikutnya,dimasa yang akan datang. Usulan perbaikan yang Anda buat saat ini mendapat penghargaan sebesar Rp. </p>
      </div>

        </body>

  </html>';
}

$mpdf->SetDefaultFont('Arial');
$mpdf->WriteHTML($html);
$mpdf->Output('report.pdf', 'I');
$mpdf = new Mpdf();
$mpdf->showImageErrors = true;
$mpdf->debug = true;
exit();
// echo $html;
