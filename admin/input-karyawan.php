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
      <section class="content-header">
        <h1>
          <center>
            Submission Form
          </center>
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        </ol>
        <div class="content-wrapper">
          <form class="form-horizontal style-form" action="user_act.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title"></h3>
                      </div>
                      <form role="form">
                        <div class="card-body">
                          <div class="form-group">
                            <label class="exampleInputPassword1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama" placeholder="Enter Name" autocomplete="off" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Pekerjaan</label>
                            <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" placeholder="enter Job" autocomplete="off" required>
                          </div>
                          <div class="form-group">
                            <label class="exampleInputPassword1">Deptartment</label>
                            <input name="dept" type="text" class="form-control" id="dept" placeholder="Enter Dept" autocomplete="off" required>
                          </div>
                          <div class="form-group">
                            <label class="exampleInputPassword1">ID Employee</label>
                            <input name="id_employee" type="text" class="form-control" id="id_employee" placeholder="Enter ID" autocomplete="off" required>
                          </div>
                          <div class="form-group">
                            <label class="exampleInputPassword1">Tanggal</label>
                            <input type='text' class="input-group date form-control" data-date="" data-date-format="yyyy-mm-dd" name='date' id="date" placeholder='Tanggal' autocomplete='off' required='required'>
                          </div>
                          <div class="form-group">
                            <label class="exampleInputPassword1">Judul</label>
                            <input name="judul" type="text" class="form-control" id="judul" placeholder="" autocomplete="off" required>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="card card-warning">
                      <div class="card-header">
                        <h3 class="card-title"></h3>
                      </div>
                      <div class="row">
                        <div class="col-sm-10">
                          <div class="form-group">
                            <label>Biaya Perbaikan</label>
                            <input name="biaya" type="text" class="form-control" id="biaya" placeholder="Enter ..." autocomplete="off" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Kondisi Sebelum</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input name="sebelum" type="file" class="custom-file-input" id="sebelum">
                          </div>
                          <div class="input-group-append">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Kondisi Sesudah</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input name="sebelum2" type="file" class="custom-file-input" id="sebelum2">
                          </div>
                          <div class="input-group-append">
                          </div>
                        </div>
                      </div>

                      <div class="card-body">
                        <form role="form">
                          <div class="row">
                            <div class="col-sm-10">
                              <!-- textarea -->
                              <div class="form-group">
                                <label>Keterangan Kondisi Sebelum</label>
                                <input name="ketsatu" type="text" class="form-control" id="ketsatu" placeholder="Enter ..." autocomplete="off" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-10">
                              <div class="form-group">
                                <label>Keterangan Kondisi Sesudah</label>
                                <input name="ketdua" type="text" class="form-control" id="ketdua" placeholder="Enter ..." autocomplete="off" required>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label"></label>
                      <div class="col-sm-8">
                        <input type="submit" name="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                        <a href="karyawan.php" class="btn btn-sm btn-danger">Batal </a>
                      </div>
                    </div>
          </form>
        </div>
    </div>
  </div>
  </div>
  </section>


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