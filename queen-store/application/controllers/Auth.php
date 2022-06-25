<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'model');
    }

    public function index()
    {
        if (is_logged_in()) {
            $this->session->set_flashdata('success', 'Anda sudah login !');
            redirect('/home');
        }
        $this->load->view('template/auth/login');
    }

    public function login()
    {
        $uname = $this->input->post('uname');
        $password = $this->input->post('password');

        $user = $this->model->get_user($uname, $password);

        if (!empty($user)) {
            $this->session->set_userdata('id_user', $user['id']);
            $this->session->set_userdata('user', $user);

            $this->session->set_flashdata('success', 'Anda berhasil login !');
            redirect('home');
        } else {
            $this->session->set_flashdata('error', 'Kredensial Anda salah !');
            redirect('/auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('telp', 'Telp', 'required');
        $this->form_validation->set_rules('kode_pos', 'Kode pos', 'required');

		if($this->form_validation->run() != false){
            $register = $this->model->register();
            
            if ($register) {
                $this->session->set_flashdata('success', 'Anda berhasil mendaftar, Silahkan login dengan akun yang baru saja dibuat !');
                redirect('/auth');
            } else {
                $this->session->set_flashdata('error', 'Ada kesalahan sistem saat register !');
                redirect('/auth/register');
            }
		}else{
            if (!empty($this->input->post())) {
                $this->session->set_flashdata('error', 'Isi data registrasi dengan benar !');
            }
            $this->load->view('template/auth/register');
		}
    }

    public function logout()
    {
        $this->session->unset_userdata(['user', 'id_user']);
        $this->session->set_flashdata('success', 'Anda berhasil logout !');
        redirect('home');
    }
}

/* End of file Login.php and path \application\controllers\Login\Login.php */
