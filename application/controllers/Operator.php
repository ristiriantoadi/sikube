<?php 
    // session_start();
    class Operator extends CI_Controller{

        public function __construct(){
            parent::__construct();
            if(!$this->session->username || $this->session->status != 'operator'){
                redirect(site_url('login'));
            }
            
        }

        public function index(){//ini beranda
            // echo "this is operator's beranda";
            $data['username'] = $this->session->username;
            $data['halaman'] = "beranda";
            $this->load->view('templates/header_operator',$data);
            $this->load->view('operator/beranda',$data);
            $this->load->view('templates/footer');
        }
        
        public function penjualan(){    
            $data['username'] = $this->session->username;
            $data['halaman'] = "penjualan";
            $this->load->view('templates/header_operator',$data);
            $this->load->view('operator/penjualan',$data);
            $this->load->view('templates/footer');
        }

        public function anggota(){
            $data['username'] = $this->session->username;
            $data['halaman'] = "penjualan";
            $this->load->view('templates/header_operator',$data);
            $this->load->view('operator/anggota',$data);
            $this->load->view('templates/footer');
        }

        

    }
?>