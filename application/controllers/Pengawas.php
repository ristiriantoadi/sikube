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

        public function penjualan(){
            $data['username'] = $this->session->username;
            $data['halaman'] = 'penjualan';
            $this->load->view('templates/header_pengawas',$data);
            $this->load->view('pengawas/penjualan');
            $this->load->view('templates/footer');
        }

        public function anggota(){
            $data['username'] = $this->session->username;
            $data['halaman'] = 'anggota';
            $this->load->view('templates/header_pengawas',$data);
            $this->load->view('pengawas/anggota');
            $this->load->view('templates/footer');
        }
    }
?>