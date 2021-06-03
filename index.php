<?php
session_start();

?>
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


<title>Submission Apps</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="style.css">

<body class="main-bg">
  <?php
  include 'conn.php';
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM user";
    $query = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($query) == 0) {
      echo '<div class="alert alert-danger">
          <span class="text-capitalize"><p class="text-center">login gagal, silahkan coba lagi !</p></span>
         </div>';
    } else {
      $d = $query->fetch_array();
      $_SESSION['username'] = $username;
      $_SESSION['nama_user'] = $d['nama_user'];
      $_SESSION['status'] = $d['status'];
      $_SESSION['hak_akses'] = $d['hak_akses'];
      echo '<meta http-equiv="refresh" content="0; url=admin/karyawan.php">';

      // header("location:admin/karyawan.php?alert=success");
    }
  }
  ?>
  <form action="" method="POST">
    <div class="login-container text-c animated flipInX">
      <div>
        <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
      </div>
      <h3 class="text-whitesmoke">Mercedes-Benz</h3>
      <div class="container-content">
        <div class="margin-t">
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required="">
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="">
          </div>
          <button type="submit" name="submit" class="form-button button-l margin-b">Sign In</button>
          <!-- <p class="text-whitesmoke text-center"><small>Do not have an account?</small></p> -->
          <p class="margin-t text-whitesmoke"><small> A Daimler &copy; Company</small> </p>
        </div>
      </div>
    </div>
  </form>
</body>