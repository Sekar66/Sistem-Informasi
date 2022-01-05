<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DATA DINAS PERIKANAN</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <!--<div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>-->
        <div class="sidebar-brand-text mx-3"> DINAS PERIKANAN </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Memberbarui Data</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        MENU
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Data KUB</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data :</h6>
            <a class="collapse-item" href="#"><b>KUB Aktif</b></a>
            <a class="collapse-item" href="index.php?kub_na">KUB Non Aktif</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseData" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Data Nelayan</span>
        </a>
        <div id="collapseData" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Semua Nelayan :</h6>
            <a class="collapse-item" href="index.php?nelayan_tugu">Data Nelayan Tugu</a>
            <a class="collapse-item" href="index.php?nelayan_mangunharjo">Data Nelayan <br>Mangunharjo</a>
            <a class="collapse-item" href="index.php?nelayan_bandarharjo">Data Nelayan <br>Bandarharjo</a>
            <a class="collapse-item" href="index.php?nelayan_tanjungmas">Data Nelayan <br>tanjung Mas</a>
            <a class="collapse-item" href="index.php?nelayan_luarkota">Data Nelayan Luar <br>Kota</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Profil Nelayan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Profil Nelayan <br>Perkecamatan:</h6>
            <a class="collapse-item" href="index.php?profil_tugu">Kecamatan TUGU</a>
            <a class="collapse-item" href="index.php?profil_genuk">Kecamatan GENUK</a>
            <a class="collapse-item" href="index.php?profil_smgutara">Kecamatan SEMARANG <br>UTARA</a>
            <a class="collapse-item" href="index.php?profil_ngaliyan">Kecamatan NGALIYAN</a>
            <a class="collapse-item" href="index.php?profil_smgbarat">Kecamatan SEMARANG <br>BARAT</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <!--<div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>-->

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">DINAS PERIKANAN</span>
                <img class="img-profile rounded-circle" src="pofile.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <FORM ACTION="" METHOD="POST">
        <table border='1'style = width:50%;height:70%;background-color:rgba(255,255,255,0.8)>
        <tr>
        <td>No</td><td>: <INPUT TYPE=TEXT NAME="no"
        size="50" readonly value="<?php echo $row[0];?>"></td></tr>
        <tr>
        <td>Kota</td><td>: <INPUT TYPE=TEXT NAME="kota"
        size="50" value="<?php echo $row[1];?>"></td></tr>
        <tr>
        <td>Nama KUB</td><td>: <INPUT TYPE=TEXT NAME="nama_kub" size="50"
        value="<?php echo $row[2];?>"></td></tr>
        <tr>
        <td>Nomor Regristrasi</td><td>: <INPUT TYPE=TEXT NAME="nomor_reg"
        size="50" value="<?php echo $row[3];?>" ></td></tr>
        <tr>
        <td>Alamat KUB</td><td>: <INPUT TYPE=TEXT NAME="alamat_kub"
        size="50" value="<?php echo $row[4];?>"></td></tr>
        <tr>
        <td>Ketua</td><td>: <INPUT TYPE=TEXT NAME="ketua" size="50"
        value="<?php echo $row[5];?>"></td></tr>
        <tr>
        <td>Jumlah Anggota</td><td>: <INPUT TYPE=TEXT NAME="jumlah_anggota"
        size="50" value="<?php echo $row[6];?>" ></td></tr>
        <tr>
        <tr>
        <td>Status</td><td>: <INPUT TYPE=TEXT NAME="status"
        size="50" value="<?php echo $row[7];?>" ></td></tr>
        <tr>
        <tr>
        <td>Kelas KUB</td><td>: <INPUT TYPE=TEXT NAME="kelas_kub"
        size="50" value="<?php echo $row[8];?>" ></td></tr>
        <tr>
        <tr>
        <td>No Telepon</td><td>: <INPUT TYPE=TEXT NAME="no_tlp"
        size="50" value="<?php echo $row[9];?>" ></td></tr>
        <tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
        </table>
        </FORM>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Dinas Perikanan</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form action="" method="POST">
          <input type="submit" name = "logout" value = "logout" class="btn btn-primary">
        </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php
  if(isset($_POST['submit'])) //jika button submit diklik maka panggil fungsi update pada controller
  { 
    $main = new controller();
		$main->update();
	}
?>