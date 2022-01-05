<?php
    class model
    {
        public $connect;

        function __construct()
        {
            $this->connect = mysqli_connect("localhost","root","",'data_nelayan');
            
        }
        function getlogin()
        {
            if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
            {
                $data = array($_REQUEST['username'],$_REQUEST['password']);
                return $data;
            }
            else
            {
                return "empty";
            }
        }
        function __login($username,$password)
        {
            $query = "select * from user where username ='$username'";
            $result = $this->execute($query);
            if($this->connect->connect_error)
            {
                return "error";
            }
            else
            {
                $row = mysqli_fetch_array($result);
                if($username==$row[0] && $password == $row[1])
                {
                    return "login";
                }
                else
                {
                    return "invalid";
                }
            }
        }
        function execute($query)
        {
            return mysqli_query($this->connect,$query);
        }
        function selectAll() //kub aktif
        {
            $query = "select * from kub_aktif";
            return $this->execute($query);
        }
        function selectAll1() //kub non aktif
        {
            $query = "select * from kub_nonaktif";
            return $this->execute($query);
        }
        function selectAll2() //kub by pupi
        {
            $query = "select * from kub_by_pupi";
            return $this->execute($query);
        }
        function selectAll3() //nelayan tugu
        {
            $query = "select * from nelayan_tugu";
            return $this->execute($query);
        }
        function selectAll4() //nelayan mangunharjo
        {
            $query = "select * from nelayan_mangunharjo";
            return $this->execute($query);
        }
        function selectAll5() //nelayan bandarharjo
        {
            $query = "select * from nelayan_bandarharjo";
            return $this->execute($query);
        }
        function selectAll6() //nelayan tanjung mas
        {
            $query = "select * from nelayan_tanjungmas";
            return $this->execute($query);
        }
        function selectAll7() //nelayan luarkota
        {
            $query = "select * from nelayan_luarkota";
            return $this->execute($query);
        }
        function selectAll8() //profil tugu
        {
            $query = "select * from profil_tugu";
            return $this->execute($query);
        }
        function selectAll9() //profil genuk
        {
            $query = "select * from profil_genuk";
            return $this->execute($query);
        }
        function selectAll10() //profil semarang utara
        {
            $query = "select * from profil_smgutara";
            return $this->execute($query);
        }
        function selectAll11() //profil ngaliyan
        {
            $query = "select * from profil_ngaliyan";
            return $this->execute($query);
        }
        function selectAll12() //profil semarang barat
        {
            $query = "select * from profil_smgbarat";
            return $this->execute($query);
        }
        function selectData1($no)
        {   $query = "select * from kub_aktif where no =".$no;
            return $this->execute($query);
        }
        function selectData2($no)
        {   $query = "select * from kub_nonaktif where no =".$no;
            return $this->execute($query);
        }
        function selectData3($no)
        {   $query = "select * from nelayan_tugu where no =".$no;
            return $this->execute($query);
        }
        function selectData4($no)
        {   $query = "select * from nelayan_mangunharjo where no =".$no;
            return $this->execute($query);
        }
        function selectData5($no)
        {   $query = "select * from nelayan_bandarharjo where no =".$no;
            return $this->execute($query);
        }
        function selectData6($no)
        {   $query = "select * from nelayan_tanjungmas where no =".$no;
            return $this->execute($query);
        }
        function selectData7($no)
        {   $query = "select * from nelayan_luarkota where no =".$no;
            return $this->execute($query);
        }
        function selectData8($no)
        {   $query = "select * from profil_tugu where no =".$no;
            return $this->execute($query);
        }
        function selectData9($no)
        {   $query = "select * from profil_genuk where no =".$no;
            return $this->execute($query);
        }
        function selectData10($no)
        {   $query = "select * from profil_ngaliyan where no =".$no;
            return $this->execute($query);
        }
        function selectData11($no)
        {   $query = "select * from profil_smgutara where no =".$no;
            return $this->execute($query);
        }
        function selectData12($no)
        {   $query = "select * from profil_smgbarat where no =".$no;
            return $this->execute($query);
        }

        function updateFile($no, $kota, $nama_kub, $nomor_reg, $alamat_kub, $ketua, $jumlah_anggota, $status, $kelas_kub, $no_tlp) //kub aktif
        {
            $query = "UPDATE kub_aktif SET no='$no', kota = '$kota', nama_kub = '$nama_kub', nomor_reg = '$nomor_reg', alamat_kub = '$alamat_kub', ketua = '$ketua', jumlah_anggota = '$jumlah_anggota', status = '$status', kelas_kub = '$kelas_kub', no_tlp = '$no_tlp' WHERE no =' $no' ";
            return $this->execute($query);
        }
        function updateFile1($no, $nama_kub, $no_reg, $alamat, $jml_anggota, $reg_tahun) //kub non aktif
        {
            $query = "UPDATE kub_nonaktif SET no='$no', nama_kub = '$nama_kub', no_reg = '$no_reg', alamat = '$alamat', jml_anggota = '$jml_anggota', reg_tahun = '$reg_tahun' WHERE no = '$no'";
            return $this->execute($query);
        }

        function updateFile2($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel) //nelayan_tugu
        {
            $query = "UPDATE nelayan_tugu SET no = '$no', nama = '$nama', nik = '$nik', alamat = '$alamat', nama_kapal = '$nama_kapal', pas_kecil = '$pas_kecil', mesin = '$mesin', bbm = '$bbm', alat_tangkap = '$alat_tangkap', kub = '$kub', asnel = '$asnel' WHERE no = '$no'";
            return $this->execute($query);
        }
        function updateFile3($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel) //nelayan_mangunharjo
        {
            $query = "UPDATE nelayan_mangunharjo SET no = '$no', nama = '$nama', nik = '$nik', alamat = '$alamat', nama_kapal = '$nama_kapal', pas_kecil = '$pas_kecil', mesin = '$mesin', bbm = '$bbm', alat_tangkap = '$alat_tangkap', kub = '$kub', asnel = '$asnel' WHERE no = '$no'";
            return $this->execute($query);
        }
        function updateFile4($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel) //nelayan_bandarharjo
        {
            $query = "UPDATE nelayan_bandarharjo SET no = '$no', nama = '$nama', nik = '$nik', alamat = '$alamat', nama_kapal = '$nama_kapal', pas_kecil = '$pas_kecil', mesin = '$mesin', bbm = '$bbm', alat_tangkap = '$alat_tangkap', kub = '$kub', asnel = '$asnel' WHERE no = '$no'";
            return $this->execute($query);
        }
        function updateFile5($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel) //nelayan_tanjung mas
        {
            $query = "UPDATE nelayan_tanjungmas SET no = '$no', nama = '$nama', nik = '$nik', alamat = '$alamat', nama_kapal = '$nama_kapal', pas_kecil = '$pas_kecil', mesin = '$mesin', bbm = '$bbm', alat_tangkap = '$alat_tangkap', kub = '$kub', asnel = '$asnel' WHERE no = '$no'";
            return $this->execute($query);
        }
        function updateFile6($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel) //nelayan_luar kota
        {
            $query = "UPDATE nelayan_luarkota SET no = '$no', nama = '$nama', nik = '$nik', alamat = '$alamat', nama_kapal = '$nama_kapal', pas_kecil = '$pas_kecil', mesin = '$mesin', bbm = '$bbm', alat_tangkap = '$alat_tangkap', kub = '$kub', asnel = '$asnel' WHERE no = '$no'";
            return $this->execute($query);
        }

        function updateFile7($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub) //profil_tugu
        {
            $query = "UPDATE profil_tugu SET no = '$no', nama_nelayan = '$nama_nelayan', usia = '$usia', kecamatan = '$kecamatan', kelurahan = '$kelurahan',  alamat = '$alamat', alat_tangkap = '$alat_tangkap', ukuran_kapal = '$ukuran_kapal', kub = '$kub' WHERE no = '$no'";
            return $this->execute($query);
        }
        function updateFile8($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub) //profil_genuk
        {
            $query = "UPDATE profil_genuk SET no = '$no', nama_nelayan = '$nama_nelayan', usia = '$usia', kecamatan = '$kecamatan', kelurahan = '$kelurahan',  alamat = '$alamat', alat_tangkap = '$alat_tangkap', ukuran_kapal = '$ukuran_kapal', kub = '$kub' WHERE no = '$no'";
            return $this->execute($query);
        }
        function updateFile9($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub) //profil_semarang utara
        {
            $query = "UPDATE profil_smgutara SET no = '$no', nama_nelayan = '$nama_nelayan', usia = '$usia', kecamatan = '$kecamatan', kelurahan = '$kelurahan',  alamat = '$alamat', alat_tangkap = '$alat_tangkap', ukuran_kapal = '$ukuran_kapal', kub = '$kub' WHERE no = '$no'";
            return $this->execute($query);
        }
        function updateFile10($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub) //profil_ngaliyan
        {
            $query = "UPDATE profil_ngaliyan SET no = '$no', nama_nelayan = '$nama_nelayan', usia = '$usia', kecamatan = '$kecamatan', kelurahan = '$kelurahan',  alamat = '$alamat', alat_tangkap = '$alat_tangkap', ukuran_kapal = '$ukuran_kapal', kub = '$kub' WHERE no = '$no'";
            return $this->execute($query);
        }
        function updateFile11($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub) //profil_semarang barat
        {
            $query = "UPDATE profil_smgbarat SET no = '$no', nama_nelayan = '$nama_nelayan', usia = '$usia', kecamatan = '$kecamatan', kelurahan = '$kelurahan',  alamat = '$alamat', alat_tangkap = '$alat_tangkap', ukuran_kapal = '$ukuran_kapal', kub = '$kub' WHERE no = '$no'";
            return $this->execute($query);
        }

        function deleteFile($no) //kub aktif
        {
            $query = "delete from kub_aktif where no = '$no'";
            return $this->execute($query);
        }
        function deleteFile1($no) //kub non aktif
        {
            $query = "delete from kub_nonaktif where no = '$no'";
            return $this->execute($query);
        }
        function deleteFile2($no) //nelayan tugu
        {
            $query = "delete from nelayan_tugu where no = '$no'";
            return $this->execute($query);
        }
        function deleteFile3($no) //nelayan mangunharjo
        {
            $query = "delete from nelayan_mangunharjo where no = '$no'";
            return $this->execute($query);
        }
        function deleteFile4($no) //nelayan bandarharjo
        {
            $query = "delete from nelayan_bandarharjo where no = '$no'";
            return $this->execute($query);
        }
        function deleteFile5($no) //nelayan tanjung mas
        {
            $query = "delete from nelayan_tanjungmas where no = '$no'";
            return $this->execute($query);
        }
        function deleteFile6($no) //nelayan luar kota
        {
            $query = "delete from nelayan_luarkota where no = '$no'";
            return $this->execute($query);
        }
        function deleteFile7($no) //profil tugu
        {
            $query = "delete from profil_tugu where no = '$no'";
            return $this->execute($query);
        }
        function deleteFile8($no) //profil genuk
        {
            $query = "delete from profil_genuk where no = '$no'";
            return $this->execute($query);
        }
        function deleteFile9($no) //profilsemarang utara
        {
            $query = "delete from profil_smgutara where no = '$no'";
            return $this->execute($query);
        }
        function deleteFile10($no) //profil ngaliyan
        {
            $query = "delete from profil_ngaliyan where no = '$no'";
            return $this->execute($query);
        }
        function deleteFile11($no) //profil semarang barat
        {
            $query = "delete from profil_smgbarat where no = '$no'";
            return $this->execute($query);
        }

        function insertFile($no, $kota, $nama_kub, $nomor_reg, $alamat_kub, $ketua, $jumlah_anggota, $status, $kelas_kub, $no_tlp) //kub aktif
        {
            $query = "INSERT INTO kub_aktif VALUES ('$no', '$kota', '$nama_kub', '$nomor_reg', '$alamat_kub', '$ketua', '$jumlah_anggota', '$status', '$kelas_kub', '$no_tlp')";
            return $this->execute($query);
        }
        function insertFile1($no, $nama_kub, $no_reg, $alamat, $jml_anggota, $reg_tahun) //kub non aktif
        {
            $query = "INSERT INTO kub_nonaktif VALUES ('$no', '$nama_kub', '$no_reg', '$alamat', '$jml_anggota', '$reg_tahun')";
            return $this->execute($query);
        }
        function insertFile2($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel) //nelayan tugu
        {
            $query = "INSERT INTO nelayan_tugu VALUES ('$no', '$nama', '$nik', '$alamat','$nama_kapal', '$pas_kecil', '$mesin', '$bbm', '$alat_tangkap', '$kub', '$asnel')";
            return $this->execute($query);
        }
        function insertFile3($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel) //nelayan mangunharjo
        {
            $query = "INSERT INTO nelayan_mangunharjo VALUES ('$no', '$nama', '$nik', '$alamat', '$nama_kapal', '$pas_kecil', '$mesin', '$bbm', '$alat_tangkap', '$kub', '$asnel')";
            return $this->execute($query);
        }
        function insertFile4($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel) //nelayan bandarharjo
        {
            $query = "INSERT INTO nelayan_bandarharjo VALUES ('$no', '$nama', '$nik', '$alamat','$nama_kapal', '$pas_kecil', '$mesin', '$bbm', '$alat_tangkap', '$kub', '$asnel')";
            return $this->execute($query);
        }
        function insertFile5($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel) //nelayan tanjung mas
        {
            $query = "INSERT INTO nelayan_tanjungmas VALUES ('$no', '$nama', '$nik', '$alamat','$nama_kapal', '$pas_kecil', '$mesin', '$bbm', '$alat_tangkap', '$kub', '$asnel')";
            return $this->execute($query);
        }
        function insertFile6($no, $nama, $nik, $alamat, $nama_kapal, $pas_kecil, $mesin, $bbm, $alat_tangkap, $kub, $asnel) //nelayan luar kota
        {
            $query = "INSERT INTO nelayan_luarkota VALUES ('$no', '$nama', '$nik', '$alamat','$nama_kapal', '$pas_kecil', '$mesin', '$bbm', '$alat_tangkap', '$kub', '$asnel')";
            return $this->execute($query);
        }

        function insertFile7($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub) //profil tugu
        {
            $query = "INSERT INTO profil_tugu VALUES ('$no', '$nama_nelayan', '$usia', '$kecamatan', '$kelurahan',  '$alamat', '$alat_tangkap', '$nama_kapal', '$ukuran_kapal', '$kub')";
            return $this->execute($query);
        }
        function insertFile8($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kubt) //profil genuk
        {
            $query = "INSERT INTO profil_genuk VALUES ('$no', '$nama_nelayan', '$usia', '$kecamatan', '$kelurahan',  '$alamat', '$alat_tangkap', '$nama_kapal', '$ukuran_kapal', '$kub')";
            return $this->execute($query);
        }
        function insertFile9($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub) //profil semarang utara
        {
            $query = "INSERT INTO profil_smgutara VALUES ('$no', '$nama_nelayan', '$usia', '$kecamatan', '$kelurahan',  '$alamat', '$alat_tangkap', '$nama_kapal', '$ukuran_kapal', '$kub')";
            return $this->execute($query);
        }
        function insertFile10($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub) //profil ngaliyan
        {
            $query = "INSERT INTO profil_ngaliyan VALUES ('$no', '$nama_nelayan', '$usia', '$kecamatan', '$kelurahan',  '$alamat', '$alat_tangkap', '$nama_kapal', '$ukuran_kapal', '$kub')";
            return $this->execute($query);
        }
        function insertFile11($no, $nama_nelayan, $usia, $kecamatan, $kelurahan, $alamat, $alat_tangkap, $nama_kapal, $ukuran_kapal, $kub) //profil semarang barat
        {
            $query = "INSERT INTO profil_smgbarat VALUES ('$no', '$nama_nelayan', '$usia', '$kecamatan', '$kelurahan',  '$alamat', '$alat_tangkap', '$nama_kapal', '$ukuran_kapal', '$kub')";
            return $this->execute($query);
        }

        function fetch($var)
        {
            return mysqli_fetch_array($var);
        }

        function __destruct(){

        }
    }
?>