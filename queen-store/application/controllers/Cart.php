<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Cart extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cart_model', 'model');
    }

    public function index()
    {
        $data['cart'] = $this->model->get_cart();

        $this->template->load('cart/index', $data);
    }

    public function insertOrUpdateCart($id)
    {
        if (!is_logged_in()) {
            
            $this->session->set_flashdata('error', 'Anda belum login, silahkan login terlebih dahulu !');
            redirect('/');
        }

        $this->model->insertOrUpdateCart($id);

        $this->session->set_flashdata('success', 'Berhasil masuk cart !');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function checkout()
    {
        $checkout = $this->model->checkout();

        if ($checkout) {
            $this->session->set_flashdata('success', 'Berhasil checkout cart !');
            redirect('/order/checkout');
        }
    }

    public function delete($id)
    {
        $del = $this->model->delete($id);
        if ($del) {
            $this->session->set_flashdata('success', 'Berhasil hapus produk dari cart !');
            redirect('/cart/index');
        }
    }
}