<?php 
    class Pengawas extends CI_Controller{

        public function __construct(){
            parent::__construct();
            if(!$this->session->username || $this->session->status != 'pengawas'){
                redirect(site_url('login'));
            }
            
        }
        
        public function index(){//this is beranda
            $data['username'] = $this->session->username;
            $data['halaman'] = "beranda";
            $data['subhalaman']="";
            $this->load->view('templates/header_pengawas',$data);
            $this->load->view('pengawas/beranda',$data);
            $this->load->view('templates/footer');
        }

        public function kube($subhalaman='kelompok'){
            // echo "this is kube page";
            $data['username'] = $this->session->username;
            $data['halaman'] = 'kube';
            $data['subhalaman'] = $subhalaman;
            // $this->load->view('templates/header_pengawas',$data);
            // $this->load->view('pengawas/kube');
            // $this->load->view('templates/footer');
            if($subhalaman == 'kelompok'){
                
                //SELECT data kelompok
                $query = $this->db->query("SELECT * FROM kelompok")->result();
                foreach($query as $row){
                    // echo "Nama: ".$row->nama."<br>";
                    $data['kelompok']
                }
                exit();


                $this->load->view('templates/header_pengawas',$data);
                $this->load->view('pengawas/kelompok');
                $this->load->view('templates/footer');
            }else if($subhalaman=='operator'){
                $this->load->view('templates/header_pengawas',$data);
                $this->load->view('pengawas/operator');
                $this->load->view('templates/footer');               
            }else if($subhalaman == 'tambah-kelompok'){
                $this->load->view('templates/header_pengawas',$data);
                $this->load->view('pengawas/tambah_kelompok');
                $this->load->view('templates/footer'); 
            }
        }

        public function handleTambahKelompok(){
            
            //parse input post
            echo "Nama kelompok: ".$this->input->post('nama-kelompok')."<br>";
            $namaKelompok = $this->input->post('nama-kelompok');
            echo "Dusun: ".$this->input->post("nama-dusun")."<br>";
            $namaDusun = $this->input->post("nama-dusun");
            echo "Tanggal berdiri: ".$this->input->post('tanggal-berdiri')."<br>";
            $tanggalBerdiri = $this->input->post('tanggal-berdiri');
            echo "Produk: ".$this->input->post('nama-produk')."<br>";
            $namaProduk = $this->input->post('nama-produk');
            echo "Lokasi usaha: ".$this->input->post("lokasi-usaha")."<br>";
            $lokasiUsaha = $this->input->post("lokasi-usaha");
            

            
            //insert data info umum kelompok ke dalam tabel kelompok
            $query = $this->db->query("SELECT * FROM kelompok ORDER BY id_kelompok desc limit 1")->row();
            $idKelompok = $query->id_kelompok+1;
            // echo $idKelompok;
            // exit(); 
            if($this->db->query("INSERT INTO kelompok (id_kelompok,nama,dusun,tanggal_berdiri,produk,lokasi_usaha)
             VALUES ('$idKelompok','$namaKelompok','$namaDusun','$tanggalBerdiri','$namaProduk','$lokasiUsaha')")){
                
                echo "Sukses tambah kelompok dengan id ".$idKelompok."<br>";
                //GET jumlah anggota
                $query = $this->db->query("SELECT * FROM anggota ORDER BY id_anggota desc limit 1")->row();
                $id=$query->id_anggota+1;
                for($numAnggota=0;$numAnggota<10;$numAnggota++){
                    echo "Anggota ".($numAnggota+1)."<br>";
                
                    //parse data
                    echo "Nama Lengkap ".$this->input->post("nama-lengkap")[$numAnggota]."<br>";
                    $namaLengkap = $this->input->post("nama-lengkap")[$numAnggota];

                    echo "Alamat ".$this->input->post('alamat')[$numAnggota]."<br>";
                    $alamat = $this->input->post("alamat")[$numAnggota];
                    
                    echo "Tanggal lahir ".$this->input->post("tanggal-lahir")[$numAnggota]."<br>";
                    $tanggalLahir = $this->input->post("tanggal-lahir")[$numAnggota];
                        
                    echo "Jabatan ".$this->input->post("jabatan")[$numAnggota]."<br>";
                    $jabatan = $this->input->post("jabatan")[$numAnggota];
                
                    //insert data anggota
                    $idAnggota = $id+$numAnggota;
                    if($this->db->query("INSERT INTO anggota (id_anggota,nama_lengkap,alamat,tanggal_lahir,jabatan,id_kelompok)
                    VALUES ('$idAnggota','$namaLengkap','$alamat','$tanggalLahir','$jabatan','$idKelompok')")){
                        echo "Sukses tambah anggota dengan id ".$idAnggota."<br>";
                    }else{
                        echo "Gagal tambah anggota dengan id ".$idAnggota."<br>";
                    }
                }
            }else{
                echo "Gagal tambah kelompok dengan id ".$idKelompok."<br>";
            }

            
            
        }

        public function penjualan(){
            $data['username'] = $this->session->username;
            $data['halaman'] = 'penjualan';
            $data['subhalaman']='';
            $this->load->view('templates/header_pengawas',$data);
            $this->load->view('pengawas/penjualan');
            $this->load->view('templates/footer');
        }

        public function anggota(){
            $data['username'] = $this->session->username;
            $data['halaman'] = 'anggota';
            $data['subhalaman']='';
            $this->load->view('templates/header_pengawas',$data);
            $this->load->view('pengawas/anggota');
            $this->load->view('templates/footer');
        }
    }
?>