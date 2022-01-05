<?php 
ob_start();
    include "model/model.php";

    class controller{

        public $model;

        function __construct(){
            $this->model = new model();
        }
        function view_kub_nonaktif()
        {
            $data = $this->model->selectAll1();
            include 'view/view_kub_nonaktif.php';
        }
        function view_nelayan_tugu()
        {
            $data = $this->model->selectAll3();
            include 'view/view_nelayan_tugu.php';
        }
        function view_nelayan_mangunharjo()
        {
            $data = $this->model->selectAll4();
            include 'view/view_nelayan_mangunharjo.php';
        }
        function view_nelayan_bandarharjo()
        {
            $data = $this->model->selectAll5();
            include 'view/view_nelayan_bandarharjo.php';
        }
        function view_nelayan_tanjungmas()
        {
            $data = $this->model->selectAll6();
            include 'view/view_nelayan_tanjungmas.php';
        }
        function view_nelayan_luarkota()
        {
            $data = $this->model->selectAll7();
            include 'view/view_nelayan_luarkota.php';
        }
        function view_profil_tugu()
        {
            $data = $this->model->selectAll8();
            include 'view/view_profil_tugu.php';
        }
        function view_profil_genuk()
        {
            $data = $this->model->selectAll9();
            include 'view/view_profil_genuk.php';
        }
        function view_profil_smgutara()
        {
            $data = $this->model->selectAll10();
            include 'view/view_profil_smgutara.php';
        }
        function view_profil_ngaliyan()
        {
            $data = $this->model->selectAll11();
            include 'view/view_profil_ngaliyan.php';
        }
        function view_profil_smgbarat()
        {
            $data = $this->model->selectAll12();
            include 'view/view_profil_smgbarat.php';
        }
        function index(){
            if (isset($_SESSION['username']))
            {
                $data = $this->model->selectAll();
                include 'view/view_home.php';
            }
            else
            {
                $result = $this->model->getlogin();
                if($result != 'empty')
                {
                    $username = $result[0];
                    $password = $result[1];
                    $login = $this->model->__login($username,$password);
                    if($login == "login")
                    {
                        $_SESSION['username'] = $username;
                        header("refresh:0");
                        $data = $this->model->selectAll();
                        include 'view/view_home.php';
                    }
                    else
                    {
                        include 'view/view_login.php';
                    }
                }
                else
                {
                    include 'view/view_login.php';
                }
            }
        }
        function view_edit($no){
            $data = $this->model->selectData1($no);
            $row = $this->model->fetch($data);
            include "view/view_edit.php";
        }
        function view_edit_nonaktif($no){
            $data = $this->model->selectData2($no);
            $row = $this->model->fetch($data);
            include "view/view_edit_nonaktif.php";
        }
        function view_edit_tugu($no){
            $data = $this->model->selectData3($no);
            $row = $this->model->fetch($data);
            include "view/view_edit_tugu.php";
        }
        function view_edit_mangunharjo($no){
            $data = $this->model->selectData4($no);
            $row = $this->model->fetch($data);
            include "view/view_edit_mangunharjo.php";
        }
        function view_edit_bandarharjo($no){
            $data = $this->model->selectData5($no);
            $row = $this->model->fetch($data);
            include "view/view_edit_bandarharjo.php";
        }
        function view_edit_tanjungmas($no){
            $data = $this->model->selectData6($no);
            $row = $this->model->fetch($data);
            include "view/view_edit_tanjungmas.php";
        }
        function view_edit_luarkota($no){
            $data = $this->model->selectData7($no);
            $row = $this->model->fetch($data);
            include "view/view_edit_luarkota.php";
        }
        function view_edit_Protugu($no){
            $data = $this->model->selectData8($no);
            $row = $this->model->fetch($data);
            include "view/view_edit_Protugu.php";
        }
        function view_edit_Progenuk($no){
            $data = $this->model->selectData9($no);
            $row = $this->model->fetch($data);
            include "view/view_edit_Progenuk.php";
        }
        function view_edit_Prongaliyan($no){
            $data = $this->model->selectData10($no);
            $row = $this->model->fetch($data);
            include "view/view_edit_Prongaliyan.php";
        }
        function view_edit_Prosmgutara($no){
            $data = $this->model->selectData11($no);
            $row = $this->model->fetch($data);
            include "view/view_edit_Prosmgutara.php";
        }
        function view_edit_Prosmgbarat($no){
            $data = $this->model->selectData12($no);
            $row = $this->model->fetch($data);
            include "view/view_edit_Prosmgbarat.php";
        }
        function view_add($no){
            include "view/view_add.php";
        }
        function view_add2($no){
            include "view/view_add2.php";
        }
        function view_add3($no){
            include "view/view_add_tugu.php";
        }
        function view_add4($no){
            include "view/view_add_mangunharjo.php";
        }
        function view_add5($no){
            include "view/view_add_bandarharjo.php";
        }
        function view_add6($no){
            include "view/view_add_tanjungmas.php";
        }
        function view_add7($no){
            include "view/view_add_luarkota.php";
        }
        function view_add8($no){
            include "view/view_add_Protugu.php";
        }
        function view_add9($no){
            include "view/view_add_Progenuk.php";
        }
        function view_add10($no){
            include "view/view_add_Prongaliyan.php";
        }
        function view_add11($no){
            include "view/view_add_Prosmgbarat.php";
        }
        function view_add12($no){
            include "view/view_add_Prosmgutara.php";
        }
////////////////////////////////////////////////////////////
        function update()
        {
            $no = $_POST ['no'];
            $kota = $_POST ['kota'];
            $nama_kub = $_POST ['nama_kub'];
            $nomor_reg = $_POST ['nomor_reg'];
            $alamat_kub = $_POST ['alamat_kub'];
            $ketua = $_POST ['ketua'];
            $jumlah_anggota = $_POST ['jumlah_anggota'];
            $status = $_POST ['status'];
            $kelas_kub = $_POST ['kelas_kub'];
            $no_tlp = $_POST ['no_tlp'];
            $update = $this->model->updateFile($no, $kota, $nama_kub, $nomor_reg, $alamat_kub, $ketua, $jumlah_anggota, $status, $kelas_kub, $no_tlp);
            header("location:index.php");
        }
        function update2()
        {
            $no = $_POST ['no'];
            $nama_kub = $_POST ['nama_kub'];
            $no_reg = $_POST ['no_reg'];
            $alamat = $_POST ['alamat'];
            $jml_anggota = $_POST ['jml_anggota'];
            $reg_tahun = $_POST ['reg_tahun'];
            $update = $this->model->updateFile1($no, $nama_kub, $no_reg, $alamat, $jml_anggota, $reg_tahun);
            header("location:index.php?kub_na");
        }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        function update3()
        {
            $no = $_POST ['no'];
            $nama = $_POST ['nama'];
            $nik = $_POST ['nik'];
            $alamat = $_POST ['alamat'];
            $nama_kapal = $_POST ['nama_kapal'];
            $pas_kecil = $_POST ['pas_kecil'];
            $mesin = $_POST ['mesin'];
            $bbm = $_POST ['bbm'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $kub = $_POST ['kub'];
            $asnel = $_POST ['asnel'];
            $update = $this->model->updateFile2($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel);
            header("location:index.php?nelayan_tugu");
        }
        function update4()
        {
            $no = $_POST ['no'];
            $nama = $_POST ['nama'];
            $nik = $_POST ['nik'];
            $alamat = $_POST ['alamat'];
            $nama_kapal = $_POST ['nama_kapal'];
            $pas_kecil = $_POST ['pas_kecil'];
            $mesin = $_POST ['mesin'];
            $bbm = $_POST ['bbm'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $kub = $_POST ['kub'];
            $asnel = $_POST ['asnel'];
            $update = $this->model->updateFile3($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel);
            header("location:index.php?nelayan_mangunharjo");
        }
        function update5()
        {
            $no = $_POST ['no'];
            $nama = $_POST ['nama'];
            $nik = $_POST ['nik'];
            $alamat = $_POST ['alamat'];
            $nama_kapal = $_POST ['nama_kapal'];
            $pas_kecil = $_POST ['pas_kecil'];
            $mesin = $_POST ['mesin'];
            $bbm = $_POST ['bbm'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $kub = $_POST ['kub'];
            $asnel = $_POST ['asnel'];
            $update = $this->model->updateFile4($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel);
            header("location:index.php?nelayan_bandarharjo");
        }
        function update6()
        {
            $no = $_POST ['no'];
            $nama = $_POST ['nama'];
            $nik = $_POST ['nik'];
            $alamat = $_POST ['alamat'];
            $nama_kapal = $_POST ['nama_kapal'];
            $pas_kecil = $_POST ['pas_kecil'];
            $mesin = $_POST ['mesin'];
            $bbm = $_POST ['bbm'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $kub = $_POST ['kub'];
            $asnel = $_POST ['asnel'];
            $update = $this->model->updateFile5($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel);
            header("location:index.php?nelayan_tanjungmas");
        }
        function update7()
        {
            $no = $_POST ['no'];
            $nama = $_POST ['nama'];
            $nik = $_POST ['nik'];
            $alamat = $_POST ['alamat'];
            $nama_kapal = $_POST ['nama_kapal'];
            $pas_kecil = $_POST ['pas_kecil'];
            $mesin = $_POST ['mesin'];
            $bbm = $_POST ['bbm'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $kub = $_POST ['kub'];
            $asnel = $_POST ['asnel'];
            $update = $this->model->updateFile6($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel);
            header("location:index.php?nelayan_luarkota");
        }
        /////////////////////////////////////////
        function update8()
        {
            $no = $_POST ['no'];
            $nama_nelayan = $_POST ['nama_nelayan'];
            $usia = $_POST ['usia'];
            $kecamatan = $_POST ['kecamatan'];
            $kelurahan = $_POST ['kelurahan'];
            $alamat = $_POST ['alamat'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $nama_kapal = $_POST ['nama_kapal'];
            $ukuran_kapal = $_POST ['ukuran_kapal'];
            $kub = $_POST ['kub'];
            $update = $this->model->updateFile7($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub);
            header("location:index.php?profil_tugu");
        }
        function update9()
        {
            $no = $_POST ['no'];
            $nama_nelayan = $_POST ['nama_nelayan'];
            $usia = $_POST ['usia'];
            $kecamatan = $_POST ['kecamatan'];
            $kelurahan = $_POST ['kelurahan'];
            $alamat = $_POST ['alamat'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $nama_kapal = $_POST ['nama_kapal'];
            $ukuran_kapal = $_POST ['ukuran_kapal'];
            $kub = $_POST ['kub'];
            $update = $this->model->updateFile8($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub);
            header("location:index.php?profil_genuk");
        }
        function update10()
        {
            $no = $_POST ['no'];
            $nama_nelayan = $_POST ['nama_nelayan'];
            $usia = $_POST ['usia'];
            $kecamatan = $_POST ['kecamatan'];
            $kelurahan = $_POST ['kelurahan'];
            $alamat = $_POST ['alamat'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $nama_kapal = $_POST ['nama_kapal'];
            $ukuran_kapal = $_POST ['ukuran_kapal'];
            $kub = $_POST ['kub'];
            $update = $this->model->updateFile10($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub);
            header("location:index.php?profil_ngaliyan");
        }
        function update11()
        {
            $no = $_POST ['no'];
            $nama_nelayan = $_POST ['nama_nelayan'];
            $usia = $_POST ['usia'];
            $kecamatan = $_POST ['kecamatan'];
            $kelurahan = $_POST ['kelurahan'];
            $alamat = $_POST ['alamat'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $nama_kapal = $_POST ['nama_kapal'];
            $ukuran_kapal = $_POST ['ukuran_kapal'];
            $kub = $_POST ['kub'];
            $update = $this->model->updateFile11($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub);
            header("location:index.php?profil_smgbarat");
        }
        function update12()
        {
            $no = $_POST ['no'];
            $nama_nelayan = $_POST ['nama_nelayan'];
            $usia = $_POST ['usia'];
            $kecamatan = $_POST ['kecamatan'];
            $kelurahan = $_POST ['kelurahan'];
            $alamat = $_POST ['alamat'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $nama_kapal = $_POST ['nama_kapal'];
            $ukuran_kapal = $_POST ['ukuran_kapal'];
            $kub = $_POST ['kub'];
            $update = $this->model->updateFile9($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub);
            header("location:index.php?profil_smgutara");
        }
        ////////////////////////////////////////////////////////////
        function delete($no){
                $delete = $this->model->deleteFile($no);
                header("location:index.php");
            }
        function delete2($no){
                $delete = $this->model->deleteFile1($no);
                header("location:index.php?kub_na");
            }
        ///////////////////////////////////////////////////
        function delete3($no){
                $delete = $this->model->deleteFile2($no);
                header("location:index.php?nelayan_tugu");
            }
        function delete4($no){
                $delete = $this->model->deleteFile3($no);
                header("location:index.php?nelayan_mangunharjo");
            }
        function delete5($no){
                $delete = $this->model->deleteFile4($no);
                header("location:index.php?nelayan_bandarharjo");
            }
        function delete6($no){
                $delete = $this->model->deleteFile5($no);
                header("location:index.php?nelayan_tanjungmas");
            }
        function delete7($no){
                $delete = $this->model->deleteFile6($no);
                header("location:index.php?nelayan_luarkota");
            }
        /////////////////////////////////////////////////////
        function delete8($no){
                $delete = $this->model->deleteFile7($no);
                header("location:index.php?profil_tugu");
            }
        function delete9($no){
                $delete = $this->model->deleteFile8($no);
                header("location:index.php?profil_genuk");
            }
        function delete10($no){
                $delete = $this->model->deleteFile9($no);
                header("location:index.php?profil_smgutara");
            }
        function delete11($no){
                $delete = $this->model->deleteFile10($no);
                header("location:index.php?profil_ngaliyan");
            }
        function delete12($no){
                $delete = $this->model->deleteFile11($no);
                header("location:index.php?profil_smgbarat");
            }      
            
        function download($file)
        {
            $data = $this->model->selectFile($file);
            $row = $this->model->fetch($data);
            $download = $row[0].".".$row[1];
            $path = "files/";
            $fullfile = $path.$download;
            header("Content-Type: application/octet-stream");
            header('Content-Disposition: attachment;filename="'.basename($download).'"');  
            header("Content-Type: application/force-download");
            header("Content-Type: application/octet-stream");
            header("Content-Type: application/download");
            header("Content-Description: File Transfer");            
            header("Content-Length: " . Filesize($fullfile));
            flush();
            $fp = fopen($fullfile, "r");
            while (!feof($fp))
            {
                echo fread($fp, 65536);
                flush();
            } 
            fclose($fp);
            
        }
        function insert(){
            $no = $_POST ['no'];
            $kota = $_POST ['kota'];
            $nama_kub = $_POST ['nama_kub'];
            $nomor_reg = $_POST ['nomor_reg'];
            $alamat_kub = $_POST ['alamat_kub'];
            $ketua = $_POST ['ketua'];
            $jumlah_anggota = $_POST ['jumlah_anggota'];
            $status = $_POST ['status'];
            $kelas_kub = $_POST ['kelas_kub'];
            $no_tlp = $_POST ['no_tlp'];
            $insert = $this->model->insertFile($no, $kota, $nama_kub, $nomor_reg, $alamat_kub, $ketua, $jumlah_anggota, $status, $kelas_kub, $no_tlp);
            header("location:index.php");
        }
        function insert2(){
            $no = $_POST ['no'];
            $nama_kub = $_POST ['nama_kub'];
            $no_reg = $_POST ['no_reg'];
            $alamat = $_POST ['alamat'];
            $jml_anggota = $_POST ['jml_anggota'];
            $reg_tahun = $_POST ['reg_tahun'];
            $insert = $this->model->insertFile1($no, $nama_kub, $no_reg, $alamat, $jml_anggota, $reg_tahun);
            header("location:index.php?kub_na");
        }
    /////////////////////////////////////////////////////////////////////////////////////////////
        function insert3(){
            $no = $_POST ['no'];
            $nama = $_POST ['nama'];
            $nik = $_POST ['nik'];
            $alamat = $_POST ['alamat'];
            $nama_kapal = $_POST ['nama_kapal'];
            $pas_kecil = $_POST ['pas_kecil'];
            $mesin = $_POST ['mesin'];
            $bbm = $_POST ['bbm'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $kub = $_POST ['kub'];
            $asnel = $_POST ['asnel'];
            $insert = $this->model->insertFile2($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel);
            header("location:index.php?nelayan_tugu");
        }
        function insert4(){
            $no = $_POST ['no'];
            $nama = $_POST ['nama'];
            $nik = $_POST ['nik'];
            $alamat = $_POST ['alamat'];
            $nama_kapal = $_POST ['nama_kapal'];
            $pas_kecil = $_POST ['pas_kecil'];
            $mesin = $_POST ['mesin'];
            $bbm = $_POST ['bbm'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $kub = $_POST ['kub'];
            $asnel = $_POST ['asnel'];
            $insert = $this->model->insertFile3($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel);
            header("location:index.php?nelayan_mangunharjo");
        }
        function insert5(){
            $no = $_POST ['no'];
            $nama = $_POST ['nama'];
            $nik = $_POST ['nik'];
            $alamat = $_POST ['alamat'];
            $nama_kapal = $_POST ['nama_kapal'];
            $pas_kecil = $_POST ['pas_kecil'];
            $mesin = $_POST ['mesin'];
            $bbm = $_POST ['bbm'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $kub = $_POST ['kub'];
            $asnel = $_POST ['asnel'];
            $insert = $this->model->insertFile4($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel);
            header("location:index.php?nelayan_bandarharjo");
        }
        function insert6(){
            $no = $_POST ['no'];
            $nama = $_POST ['nama'];
            $nik = $_POST ['nik'];
            $alamat = $_POST ['alamat'];
            $nama_kapal = $_POST ['nama_kapal'];
            $pas_kecil = $_POST ['pas_kecil'];
            $mesin = $_POST ['mesin'];
            $bbm = $_POST ['bbm'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $kub = $_POST ['kub'];
            $asnel = $_POST ['asnel'];
            $insert = $this->model->insertFile5($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel);
            header("location:index.php?nelayan_tanjungmas");
        }
        function insert7(){
            $no = $_POST ['no'];
            $nama = $_POST ['nama'];
            $nik = $_POST ['nik'];
            $alamat = $_POST ['alamat'];
            $nama_kapal = $_POST ['nama_kapal'];
            $pas_kecil = $_POST ['pas_kecil'];
            $mesin = $_POST ['mesin'];
            $bbm = $_POST ['bbm'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $kub = $_POST ['kub'];
            $asnel = $_POST ['asnel'];
            $insert = $this->model->insertFile6($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel);
            header("location:index.php?nelayan_luarkota");
        }
        ////////////////////////////////////////////////////////
        function insert8(){
            $no = $_POST ['no'];
            $nama_nelayan = $_POST ['nama_nelayan'];
            $usia = $_POST ['usia'];
            $kecamatan = $_POST ['kecamatan'];
            $kelurahan = $_POST ['kelurahan'];
            $alamat = $_POST ['alamat'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $nama_kapal = $_POST ['nama_kapal'];
            $ukuran_kapal = $_POST ['ukuran_kapal'];
            $kub = $_POST ['kub'];
            $insert = $this->model->insertFile7($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub);
            header("location:index.php?profil_tugu");
        }
        function insert9(){
            $no = $_POST ['no'];
            $nama_nelayan = $_POST ['nama_nelayan'];
            $usia = $_POST ['usia'];
            $kecamatan = $_POST ['kecamatan'];
            $kelurahan = $_POST ['kelurahan'];
            $alamat = $_POST ['alamat'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $nama_kapal = $_POST ['nama_kapal'];
            $ukuran_kapal = $_POST ['ukuran_kapal'];
            $kub = $_POST ['kub'];
            $insert = $this->model->insertFile8($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub);
            header("location:index.php?profil_genuk");
        }
        function insert10(){
            $no = $_POST ['no'];
            $nama_nelayan = $_POST ['nama_nelayan'];
            $usia = $_POST ['usia'];
            $kecamatan = $_POST ['kecamatan'];
            $kelurahan = $_POST ['kelurahan'];
            $alamat = $_POST ['alamat'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $nama_kapal = $_POST ['nama_kapal'];
            $ukuran_kapal = $_POST ['ukuran_kapal'];
            $kub = $_POST ['kub'];
            $insert = $this->model->insertFile10($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub);
            header("location:index.php?profil_ngaliyan");
        }
        function insert11(){
            $no = $_POST ['no'];
            $nama_nelayan = $_POST ['nama_nelayan'];
            $usia = $_POST ['usia'];
            $kecamatan = $_POST ['kecamatan'];
            $kelurahan = $_POST ['kelurahan'];
            $alamat = $_POST ['alamat'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $nama_kapal = $_POST ['nama_kapal'];
            $ukuran_kapal = $_POST ['ukuran_kapal'];
            $kub = $_POST ['kub'];
            $insert = $this->model->insertFile11($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub);
            header("location:index.php?profil_smgbarat");
        }
        function insert12(){
            $no = $_POST ['no'];
            $nama_nelayan = $_POST ['nama_nelayan'];
            $usia = $_POST ['usia'];
            $kecamatan = $_POST ['kecamatan'];
            $kelurahan = $_POST ['kelurahan'];
            $alamat = $_POST ['alamat'];
            $alat_tangkap = $_POST ['alat_tangkap'];
            $nama_kapal = $_POST ['nama_kapal'];
            $ukuran_kapal = $_POST ['ukuran_kapal'];
            $kub = $_POST ['kub'];
            $insert = $this->model->insertFile9($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub);
            header("location:index.php?profil_smgutara");
        }

        function __destruct(){

        }
    }
    ob_flush()
?>