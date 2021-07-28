<?php
include '../conn.php';


  $timezone = "Asia/Jakarta";
  date_default_timezone_set($timezone);
  $today = date("Y-m-d");

session_start();
if (empty($_SESSION)) {
  echo "<script language='JavaScript'>alert('Silahkan Login Terlebih Dahulu');window.location='../index.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<?php include "head.php";
?>
<style>
  .col-md-6 {
    width: 50%;
    padding-left: 40px;
  }
</style>

<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    <?php include "header.php"; ?>
    <?php include "menu.php"; ?>
    <?php include "waktu.php"; ?>
    <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Susi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-8">
           <?php  
            // fungsi untuk menampilkan pesan
            // jika alert = "" (kosong)
            // tampilkan pesan "" (kosong)
            if (empty($_GET['alert'])) {
              echo "";
            } 
            // jika alert = 1
            // tampilkan pesan Sukses "Jenis Barang baru berhasil disimpan"
            elseif ($_GET['alert'] == 1) {
              echo "<div class='alert alert-success alert-dismissable'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
                      Data Berhasil Disimpan
                    </div>";
            }
            ?>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Only Susi</h3>
            </div>
            <form class="form-horizontal" action="user_act.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input name="nama" class="form-control" id="nama" placeholder="Enter..">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Pekerjaan</label>
                  <div class="col-sm-8">
                    <input name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Enter..">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Department</label>
                  <div class="col-sm-8">
                    <input name="dept" class="form-control" id="dept" placeholder="Enter..">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">ID Employee</label>
                  <div class="col-sm-8">
                    <input name="id_employee" class="form-control" id="id_employee" placeholder="Enter..">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal</label>
                  <div class="col-sm-8">
                   <input type='text' class="input-group date form-control" data-date="" data-date-format="yyyy-mm-dd" name='date' id="date" placeholder='Tanggal' autocomplete='off' required='required' value="<?php echo $today?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Judul</label>
                  <div class="col-sm-8">
                    <input name="judul" class="form-control" id="judul" placeholder="Enter..">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Biaya Perbaikan</label>
                  <div class="col-sm-8">
                    <input type="number" name="biaya" class="form-control" id="biaya" placeholder="Enter..">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-4 control-label">Kondisi Sebelum</label>
                  <div class="col-sm-4">
                    <input type="file" name="sebelum" class="form-control" id="sebelum" placeholder="Password">
                    <small class="help-block" style="color: red">Ukuran yang di upload Max 2Mb</small>
                  </div>
                </div>                

                <div class="form-group">
                  <label class="col-sm-4 control-label">Kondisi Sebelum</label>
                  <div class="col-sm-4">
                    <input type="file" name="sebelum2" class="form-control" id="sebelum2" placeholder="Password">
                    <small class="help-block" style="color: red">Ukuran yang di upload Max 2Mb</small>
                  </div>
                </div>                

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Keterangan Kondisi Sebelum</label>
                  <div class="col-sm-8">
                    <textarea name="ketsatu" type="text" class="form-control" id="ketsatu" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Keterangan Kondisi Sesudah</label>
                  <div class="col-sm-8">
                   <textarea name="ketdua" type="text" class="form-control" id="ketdua" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer" style="text-align: center;">
                  <input type="submit" name="submit" value="Simpan" class="btn btn-sm btn-info" />&nbsp;
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </section>
  </div>



  <?php include "sidecontrol.php"; ?>
  <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->

  <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../plugins/fastclick/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>

  <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>

  <script src="../plugins/select2/select2.full.min.js"></script>

  <script>
    //options method for call datepicker
    $(".input-group.date").datepicker({
      autoclose: true,
      todayHighlight: true
    });
  </script>

  <script>
    $(function() {
      $(".select2").select2();
    });
  </script>
</body>

</html>
