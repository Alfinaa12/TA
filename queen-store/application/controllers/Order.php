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
            $order = $this->model->get_order_by_id($beli);
            redirect('/order/index/'.$order->kode_order);
        }
        // echo '<pre>';
        // var_dump($this->input->post('qty'));
        // die;
    }

    public function index($kodeOrder)
    {
        $data['order'] = $this->model->get_order_by_kode($kodeOrder);
        $data['order_detail'] = $this->model->get_order_detail($kodeOrder);

        $this->template->load('order/index', $data);
    }

    public function invoice($kodeOrder)
    {
        $data['order'] = $this->model->get_order_by_kode($kodeOrder);
        $data['order_detail'] = $this->model->get_order_detail($kodeOrder);
        // echo '<pre>';
        // var_dump($data['order'], $data['order_detail']);
        // die;
        $this->load->view('template/invoice/index', $data);
    }
}