<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Produk_model extends CI_Model 
{
    public function insertCart($id)
    {
        //cek apakah produk ID tersebut ada di table cart tidak ?
        $checkProduk = $this->checkProduk($id);
        $qty = 1;
        
        if ($checkProduk >= 1) {
            $qty = $checkProduk + 1;
        }

        $data = array(
            'id_produk'=> $id,
            'id_user'=> $this->session->userdata('id_user'),
            'qty' => $qty
        );
    
        return $this->db->insert('cart', $data);
    }                
    
    public function get_produk($limit = null)
    {
        /* 
            artinya:
            jika parameter limit tidak ada, maka : 
            select * from produk order by id desc

            jika paramter limit ada, maka:
            select * from produk limit $limit order by id desc
        */
        if (!empty($limit)) {
            $this->db->limit($limit);
        }

        $this->db->order_by('produk.id', 'desc');
        // $this->db->join('gambar', 'gambar.id_produk = produk.id', 'left');
        $q = $this->db->get('produk');

        return $q->result();
    }
    
    public function checkProduk($id)
    {
        //select count(*) from cart where id = $id
        return $this->db->get_where('cart', ['id' => $id])->num_rows();
    }
}


/* End of file Produkmodel_model.php and path \application\models\Produkmodel\Produkmodel_model.php */
