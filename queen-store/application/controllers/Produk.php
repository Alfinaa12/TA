<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Produk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model', 'model');
    }

    public function index()
    {
        
    }

    public function insertCart($id)
    {
        if (!is_logged_in()) {
            
            $this->session->set_flashdata('error', 'Anda belum login, silahkan login terlebih dahulu !');
            redirect('/');
        }

        $this->model->insertCart($id);
    }
}

/* End of file Produk.php and path \application\controllers\Produk\Produk.php */
