<?php 
    class Login extends CI_Controller{
        
        public function index(){
            
            // $this->db->query("INSERT INTO user_login (username,password) VALUES('operator1','123')");

            $this->load->view('pages/login');
        }

        public function autentikasi(){
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            // echo $username;
            // echo $password;
            $query = $this->db->query("SELECT * FROM user_login 
            WHERE username='$username' AND password='$password'")->row();
            // // $query = $this->db->query("SELECT * FROM user_login")->result();
            // foreach($query as $row){
            //     echo $row->username." ".$row->password;
            //     echo "<br>";
            // }
            // $query = $this->db->query("SELECT * FROM user_login WHERE username=".$this->db->escape($username)." 
            // AND password=".$this->db->escape($password))->row();
            if(isset($query)){
                // $this->session->set_userdata('admin','1');
                redirect(site_url('anggota/'));
            }else{
                redirect(site_url('login'));
            }
        }
    }
?>