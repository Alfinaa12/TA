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

    public function detail($id)
    {
        $data['single'] = $this->model->get_detail($id);
        
        return $this->template->load('produk/detail', $data);
    }
}

/* End of file Produk.php and path \application\controllers\Produk\Produk.php */
