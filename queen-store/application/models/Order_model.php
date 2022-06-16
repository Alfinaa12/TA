<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Order_model extends CI_Model 
{
    public function beli($cart)
    {
        $this->load->model('produk_model');

        $total = 0;
        foreach ($cart as $key => $p) {
            $produk = $this->produk_model->get_detail($p->id_produk);
            $total += $produk['harga'] * $p->qty;
        }
        
        $data = [
            'kode_order' => "QUEEN-STORE-".rand(10000000, 99999999),
            'kode_invoice' => "INV-".rand(10000000, 99999999),
            'id_user' => $this->session->userdata('id_user'),
            'total' => $total,
            'status' => 0,
            'dibuat_tgl' => date('Y-m-d H:i:s'),
            'dibuat_oleh' => $this->session->userdata('id_user')
        ];
        
        $order_id = $this->insert_order($data);

        foreach ($cart as $key => $p) {
            $data = [
                'id_order' => $order_id,
                'id_produk' => $p->id_produk,
                'qty' => $p->qty
            ];
            $this->insert_order_detail($data);
        }

        return true;
    }

    public function insert_order($data = [])
    {
        $this->db->insert('orders', $data);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    public function insert_order_detail($data = [])
    {
        $this->db->insert('order_detail', $data);
    }
}