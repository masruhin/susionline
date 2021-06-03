   <?php
    include '../conn.php';
    session_start();
    if (empty($_SESSION)) {
      echo "<script language='JavaScript'>alert('Silahkan Login Terlebih Dahulu');window.location='../index.php'</script>";
    }
    ?>
   <!DOCTYPE html>
   <html>
   <?php include "head.php"; ?>

   <!--<body class="hold-transition skin-purple sidebar-mini">-->
    <body class="hold-transition skin-purple sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
     <div class="wrapper">

       <?php include "header.php"; ?>
       <!-- Left side column. contains the logo and sidebar -->
       <?php include "menu.php"; ?>
       <?php include "sidecontrol.php"; ?>

       <?php include "waktu.php"; ?>
       <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
           <h1>
             Only Susi
             <small></small>
           </h1>
           <ol class="breadcrumb">
             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
             <li class="active">Dashboard</li>
           </ol>
         </section>

         <!-- Main content -->
         <section class="content">

           <div class="row">
             <div class="col-12 col-sm-6 col-md-3"">
            <div class=" small-box bg-aqua">
               <div class="inner">
                 <p>Transaction</p>
               </div>
               <div class="icon">
               </div>
               <a href="karyawan.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
             </div>
           </div>
           <!-- ./col -->
           <div class="col-12 col-sm-6 col-md-3"">
            <div class=" small-box bg-green">
             <div class="inner">
               <p>Submission</p>
             </div>
             <div class="icon">
             </div>
             <a href="jabatan.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
           </div>
       </div><!-- ./col -->

       <!-- ./col -->


     </div>
     </section><!-- /.Left col -->
     <!-- right col (We are only adding the ID to make the widgets sortable)-->
     </div><!-- /.row (main row) -->

     </section><!-- /.content -->
     </div><!-- /.content-wrapper -->
     <?php include "footer.php"; ?>

     <?php include "sidecontrol.php"; ?>
     <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
     <div class="control-sidebar-bg"></div>
     </div><!-- ./wrapper -->

     <!-- jQuery 2.1.4 -->
     <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
     <!-- jQuery UI 1.11.4 -->
     <script src="../css/jquery-ui.min.js"></script>
     <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
     <script>
       $.widget.bridge('uibutton', $.ui.button);
     </script>
     <!-- Bootstrap 3.3.5 -->
     <script src="../bootstrap/js/bootstrap.min.js"></script>
     <!-- Morris.js charts -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
     <script src="../plugins/morris/morris.min.js"></script>
     <!-- Sparkline -->
     <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
     <!-- jvectormap -->
     <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
     <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
     <!-- jQuery Knob Chart -->
     <script src="../plugins/knob/jquery.knob.js"></script>
     <!-- daterangepicker -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
     <script src="../plugins/daterangepicker/daterangepicker.js"></script>
     <!-- datepicker -->
     <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
     <!-- Bootstrap WYSIHTML5 -->
     <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
     <!-- Slimscroll -->
     <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
     <!-- FastClick -->
     <script src="../plugins/fastclick/fastclick.min.js"></script>
     <!-- AdminLTE App -->
     <script src="../dist/js/app.min.js"></script>
     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
     <script src="../dist/js/pages/dashboard.js"></script>
     <!-- AdminLTE for demo purposes -->
     <script src="../dist/js/demo.js"></script>
   </body>

   </html>