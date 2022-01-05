<?php
include "controller/controller.php";
$main = new controller();
  session_start();
  if(isset($_SESSION['username']))
  {
    if (isset($_POST['logout']))
    {
        session_destroy();
        header('location:index.php');
    }
  }
  //kondisi untuk menampilkan halaman web yang diminta
          if(isset($_GET['e'])){ //kondisi untuk mengakses halaman edit
            $no = $_GET['e'];
            $main->viewEdit($no);
          }else if(isset($_GET['d'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
            $no = $_GET['d'];
            $main->delete($no);
          }else if(isset($_GET['i'])){
            $main->viewInsert(); //kondisi untuk mengakses halaman add
          }else if(isset($_GET['download'])){
            $no = $_GET['download'];
            $main->download($no);
          }
          else if(isset($_GET['hapus'])){ 
            $no = $_GET['hapus'];
            $main->delete2($no);
          }
          else if(isset($_GET['hapus2'])){ 
            $no = $_GET['hapus2'];
            $main->delete3($no);
          }
          else if(isset($_GET['hapus3'])){ 
            $no = $_GET['hapus3'];
            $main->delete4($no);
          }
          else if(isset($_GET['hapus4'])){ 
            $no = $_GET['hapus4'];
            $main->delete5($no);
          }
          else if(isset($_GET['hapus5'])){ 
            $no = $_GET['hapus5'];
            $main->delete6($no);
          }
          else if(isset($_GET['hapus6'])){ 
            $no = $_GET['hapus6'];
            $main->delete7($no);
          }
          else if(isset($_GET['hapus7'])){ //tugu
            $no = $_GET['hapus7'];
            $main->delete8($no);
          }
          else if(isset($_GET['hapus8'])){ //genuk
            $no = $_GET['hapus8'];
            $main->delete9($no);
          }
          else if(isset($_GET['hapus9'])){ //smgutara
            $no = $_GET['hapus9'];
            $main->delete10($no);
          }
          else if(isset($_GET['hapus10'])){ //ngaliyan
            $no = $_GET['hapus10'];
            $main->delete11($no);
          }
          else if(isset($_GET['hapus11'])){ //smgbarat
            $no = $_GET['hapus11'];
            $main->delete12($no);
          }
          ///////////////////////////////////////////
          else if(isset($_GET['edit']))
          {
            $main->view_edit($_GET['edit']);
          }
          else if(isset($_GET['edit2']))
          {
            $main->view_edit_nonaktif($_GET['edit2']);
          }
          else if(isset($_GET['edit3']))
          {
            $main->view_edit_tugu($_GET['edit3']);
          }
          else if(isset($_GET['edit4']))
          {
            $main->view_edit_mangunharjo($_GET['edit4']);
          }
          else if(isset($_GET['edit5']))
          {
            $main->view_edit_bandarharjo($_GET['edit5']);
          }
          else if(isset($_GET['edit6']))
          {
            $main->view_edit_tanjungmas($_GET['edit6']);
          }
          else if(isset($_GET['edit7']))
          {
            $main->view_edit_luarkota($_GET['edit7']);
          }
          else if(isset($_GET['edit8']))
          {
            $main->view_edit_Protugu($_GET['edit8']);
          }
          else if(isset($_GET['edit9']))
          {
            $main->view_edit_Progenuk($_GET['edit9']);
          }
          else if(isset($_GET['edit10']))
          {
            $main->view_edit_Prongaliyan($_GET['edit10']);
          }
          else if(isset($_GET['edit11']))
          {
            $main->view_edit_Prosmgutara($_GET['edit11']);
          }
          else if(isset($_GET['edit12']))
          {
            $main->view_edit_Prosmgbarat($_GET['edit12']);
          }
          //////////////////////////////////////////////
          else if(isset($_GET['add']))
          {
            $main->view_add($_GET['add']);
          }
          else if(isset($_GET['add2']))
          {
            $main->view_add2($_GET['add2']);
          }
          else if(isset($_GET['add3']))
          {
            $main->view_add3($_GET['add3']);
          }
          else if(isset($_GET['add4']))
          {
            $main->view_add4($_GET['add4']);
          }
          else if(isset($_GET['add5']))
          {
            $main->view_add5($_GET['add5']);
          }
          else if(isset($_GET['add6']))
          {
            $main->view_add6($_GET['add6']);
          }
          else if(isset($_GET['add7']))
          {
            $main->view_add7($_GET['add7']);
          }
          else if(isset($_GET['add8']))
          {
            $main->view_add8($_GET['add8']);
          }
          else if(isset($_GET['add9']))
          {
            $main->view_add9($_GET['add9']);
          }
          else if(isset($_GET['add10']))
          {
            $main->view_add10($_GET['add10']);
          }
          else if(isset($_GET['add11']))
          {
            $main->view_add11($_GET['add11']);
          }
          else if(isset($_GET['add12']))
          {
            $main->view_add12($_GET['add12']);
          }
          //////////////////////////////////////////
          else if(isset($_GET['kub_na']))
          {
            $main->view_kub_nonaktif();
          }
          else if(isset($_GET['nelayan_tugu']))
          {
            $main->view_nelayan_tugu();
          }
          else if(isset($_GET['nelayan_mangunharjo']))
          {
            $main->view_nelayan_mangunharjo();
          }
          else if(isset($_GET['nelayan_bandarharjo']))
          {
            $main->view_nelayan_bandarharjo();
          }
          else if(isset($_GET['nelayan_tanjungmas']))
          {
            $main->view_nelayan_tanjungmas();
          }
          else if(isset($_GET['nelayan_luarkota']))
          {
            $main->view_nelayan_luarkota();
          }
          else if(isset($_GET['profil_tugu']))
          {
            $main->view_profil_tugu();
          }
          else if(isset($_GET['profil_genuk']))
          {
            $main->view_profil_genuk();
          }
          else if(isset($_GET['profil_smgutara']))
          {
            $main->view_profil_smgutara();
          }
          else if(isset($_GET['profil_ngaliyan']))
          {
            $main->view_profil_ngaliyan();
          }
          else if(isset($_GET['profil_smgbarat']))
          {
            $main->view_profil_smgbarat();
          }
          else{
              $main->index();
            }
?>