<?php 
    class Login extends CI_Controller{
        
        public function index(){
            
            // $this->db->query("INSERT INTO user_login (username,password) VALUES('operator1','123')");

            $this->load->view('login');
        }

        // public function autentikasi(){
        //     $username = $this->input->post("username");
        //     $password = $this->input->post("password");
        //     // echo $username;
        //     // echo $password;
        //     $query = $this->db->query("SELECT * FROM user_login 
        //     WHERE username='$username' AND password='$password'")->row();
        //     // // $query = $this->db->query("SELECT * FROM user_login")->result();
        //     // foreach($query as $row){
        //     //     echo $row->username." ".$row->password;
        //     //     echo "<br>";
        //     // }
        //     // $query = $this->db->query("SELECT * FROM user_login WHERE username=".$this->db->escape($username)." 
        //     // AND password=".$this->db->escape($password))->row();
        //     if(isset($query)){
        //         // $this->session->set_userdata('admin','1');
        //         redirect(site_url('anggota/'));
        //     }else{
        //         redirect(site_url('login'));
        //     }
        // }

        public function autentikasi(){
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            echo $username;
            echo $password;

            $query = $this->db->query("SELECT * FROM pengawas 
            WHERE username='$username' AND password='$password'")->row();
            // print($query);
            if(isset($query)){
                //     //go to login
                // $this->session->username=$username;
                $_SESSION['username'] = $username;
                $_SESSION['status'] = 'pengawas';
                redirect(site_url('pengawas/'));
            }else{
                $query = $this->db->query("SELECT * FROM operator 
                        WHERE username='$username' AND password='$password'")->row();
                if(isset($query)){
                    $_SESSION['username'] = $username;
                    $_SESSION['status'] = 'operator';
                    redirect(site_url('operator/'));
                }else{
                    echo "login gagal";
                }
            }
            
            // if(isset($query)){
            //     //go to login
            //     // $this->session->username=$username;
            //     $_SESSION['username'] = $username;
            //     $_SESSION['status'] = $query->status;
            //     if($query->status == 'pengawas'){
            //         //go to pengawas
            //         // echo "go to pengawas";
            //         // $this->session['username']=$username;
            //         redirect(site_url('pengawas/'));
            //     }else if($query->status == 'operator'){
            //         echo "go to operator";
            //         redirect(site_url('operator/'));
            //     }
            // }else{
            //     echo "login failed";
            // }

        }

        public function logout(){
            $this->session->sess_destroy();
            redirect(site_url('login'));
        }

    }
?>