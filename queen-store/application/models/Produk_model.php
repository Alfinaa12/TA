<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Produk_model extends CI_Model 
{
    public function get_produk_by_id($id)
    {
        // $this->db->join('gambar', 'gambar.id_produk = produk.id', 'left');
        $this->db->where('id', $id);
        $q = $this->db->get('produk');

        return $q->row_array();
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

        if (!empty($query = $this->input->get('search'))) {
            $this->db->like('nama', $query);
        }
        // $this->db->join('gambar', 'gambar.id_produk = produk.id', 'left');
        $q = $this->db->get('produk');

        return $q->result();
    }
    
    public function checkProduk($id)
    {
        //select count(*) from cart where id = $id
        return $this->db->get_where('cart', [
            'id_produk' => $id,
            'id_user' => $this->session->userdata('id_user')
        ])->num_rows();
    }

    public function get_detail($id)
    {
        return $this->db->get_where('produk', ['id' => $id])->row_array();
    }
}


/* End of file Produkmodel_model.php and path \application\models\Produkmodel\Produkmodel_model.php */
