<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Order extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cart_model', 'cart_model');
        $this->load->model('Order_model', 'model');
    }

    public function checkout()
    {
        return $this->template->load('checkout/index');
    }

    public function submit()
    {
        $cart = $this->cart_model->get_cart();
        $beli = $this->model->beli($cart);

        if ($beli) {
            $this->session->set_flashdata('success', 'Anda berhasil melakukan order !');
            redirect('/order/invoice');
        }
        // echo '<pre>';
        // var_dump($this->input->post('qty'));
        // die;
    }

    public function invoice()
    {
        $this->template->load('order/invoice');
    }
}