<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Produk_model', 'model');
    }

    public function index()
    {
        $data['produk'] = $this->model->get_produk(8);
        
        $this->template->load('home/index', $data);
    }
}

/* End of file Home.php and path \application\controllers\Home\Home.php */
