<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Cart_model extends CI_Model 
{
    public function get_cart_by_produk_id($id)
    {
        $this->db->where('id_produk', $id);
        $q = $this->db->get('cart');

        return $q->row_array();
    }

    public function insertOrUpdateCart($id)
    {
        $this->load->model('Produk_model', 'produk');

        //cek apakah produk ID tersebut ada di table cart tidak ?
        $checkProduk = $this->produk->checkProduk($id);
        $qty = 1;

        if ($checkProduk >= 1) {
            $produk = $this->get_cart_by_produk_id($id);
            $qty = $produk['qty'] + 1;
            
            $data = ['qty' => $qty];
            $this->db->where("id_produk", $id);
            $this->db->where("id_user", $this->session->userdata('id_user'));
            return $this->db->update('cart', $data);
        }

        $data = array(
            'id_produk'=> $id,
            'id_user'=> $this->session->userdata('id_user'),
            'qty' => $qty
        );
    
        return $this->db->insert('cart', $data);
    }         
    

    public function get_cart()
    {
        //select * from cart where id_user = y
        $this->db->select('cart.*, p.id as id_produk, p.harga, p.nama');
        $this->db->from('cart'); 
        $this->db->where('id_user', $this->session->userdata('id_user')); 
        $this->db->join('produk p', 'p.id=cart.id_produk', 'left');
        $this->db->order_by('cart.id', 'desc');         
        $query = $this->db->get(); 
        
        return $query->result();
    }

    public function checkout()
    {
        $cart = $this->get_cart();
        $total = 0;
        foreach ($cart as $key => $p) {
            $data = [
                'qty' => $this->input->post('qty')[$p->id]
            ];
            
            $this->db->where('id', $p->id);
            $this->db->update('cart', $data);
        }

        return true;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('cart');

        return true;
    }
}