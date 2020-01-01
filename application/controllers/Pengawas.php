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
            $this->load->view('templates/header_pengawas',$data);
            $this->load->view('pengawas/beranda',$data);
            $this->load->view('templates/footer');
        }

        public function kube(){
            // echo "this is kube page";
            $data['username'] = $this->session->username;
            $data['halaman'] = 'kube';
            $this->load->view('templates/header_pengawas',$data);
            $this->load->view('pengawas/kube');
            $this->load->view('templates/footer');
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