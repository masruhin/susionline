  <?php
  include '../conn.php';
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
    .box-primary {
    overflow-x: scroll;
    overflow-y: scroll;

    }

    th,
    td {
      min-width: 100%;
    }

    .clik {
      display: inline-block;
      padding: 10px 10px;
      font-size: 12px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      outline: none;
      color: #fff;
      background-color: #4CAF50;
      border: none;
      border-radius: 10px;
      box-shadow: 0 6px #999;
    }

    .clik:hover {
      background-color: #3e8e41
    }

    .clik:active {
      background-color: #3e8e41;
      box-shadow: 0 2px #666;
      transform: translateY(4px);
    }
  </style>
  </head>

  <body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">
      <?php include "header.php"; ?>
      <?php include "menu.php"; ?>
      <?php include "waktu.php"; ?>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Data Form
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <section class="col-lg-12 col-md-12 ">
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Form Data Submission</h3>
                  <div class="box-tools pull-right">
                  </div>
                </div>

                <div class="box-body">
                  <div class="box-footer clearfix no-border">
                    <a href="input-karyawan.php" class="clik"><i class="fa fa-plus"></i> Add Data</a>
                  </div>
                  <br>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead bgcolor="eeeeee" align="center">
                      <tr>
                        <th>Print</th>
                        <th style="width: 1%;">No</th>
                        <th>Nama</th>
                        <th>Pekerjaan</th>
                        <th>Dept / CC.</th>
                        <th>ID Employee</th>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Biaya Perbaikan</th>
                        <th>Kondisi Sebelum</th>
                        <th>Kondisi Sesudah</th>
                        <!-- <th>Keterangan Sebelum</th> -->
                        <!-- <th>Keterangan Sesudah</th> -->
                        <th class="text-center"> Action </th>
                      </tr>
                    </thead>

                    <tbody>

                      <?php
                      include '../conn.php';
                      $sql = "SELECT * FROM karyawan ORDER BY id DESC";
                      $query = mysqli_query($koneksi, $sql);
                      $no = 1;

                      while ($data = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td><a href='print.php?id=" . $data['id'] . " target='_blank' class='btn btn-danger btn-sm'> <i class='fa fa-print'></td>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $data['nama'] . "</td>";
                        echo "<td>" . $data['pekerjaan'] . "</td>";
                        echo "<td>" . $data['dept'] . "</td>";
                        echo "<td>" . $data['id_employee'] . "</td>";
                        echo "<td>" . $data['date'] . "</td>";
                        echo "<td>" . $data['judul'] . "</td>";
                        echo "<td> Rp. " . $data['biaya']  . "</td>";
                        echo "<td>" . $data['images'] . "</td>";
                        echo "<td>" . $data['images2'] . "</td>";
                        // echo "<td>" . $data['ketsatu'] . "</td>";
                        // echo "<td>" . $data['ketdua'] . "</td>";
                        echo '<td>
                      <center>
                      <a href="detail-karyawan.php?id=' . $data['id'] . '"  data-toggle="tooltip" title="View Detail" class="btn btn-sm btn-success"> <i class="glyphicon glyphicon-search"></i> </a>
                    
                      <a href="user_act.php?id=' . $data['id'] . '"  data-toggle="tooltip" title="Delete" onclick="return confirm(\'Anda yakin akan menghapus data ' . $data['id'] . '?\')" class="btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"> </i> </a>
                      </center>
                      </td>';
                        echo "</tr>";
                        $no++;
                      }
                      ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->

              </div><!-- /.box -->

            </section><!-- /.Left col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "footer.php"; ?>

      <?php include "sidecontrol.php"; ?>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
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
    <script>
      $(document).ready(function() {
        $('#example1').dataTable({
          "aLengthMenu": [
            [5, 10, 15, -1],
            [5, 10, 15, "All"]
          ],
          "iDisplayLength": 5
        });
      });
      // $(function() {
      //   $('#example1').DataTable()
      //   $('#example2').DataTable({
      //     'pageLength': 5,
      //     'paging': true,
      //     'lengthChange': false,
      //     'searching': false,
      //     'ordering': true,
      //     'info': true,
      //     'autoWidth': false
      //   });
      // });
    </script>

  </body>

  </html>