<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('get_gambar'))
{
    function get_gambar($id)
    {
        $ci=& get_instance();
        $ci->load->database(); 
        
        $ci->db->where('id_produk', $id);
        $query = $ci->db->get('gambar');
        $row = $query->result_array();
        
        return $row;
    }
}

if (!function_exists('is_logged_in'))
{
    function is_logged_in()
    {
        $ci=& get_instance();

        return !empty($ci->session->userdata('id_user'));
    }
}

if (!function_exists('get_cart'))
{
    function get_cart()
    {
        $ci=& get_instance();
        $ci->load->model('cart_model'); 
        $cart = $ci->cart_model->get_cart();
        
        return $cart;
        // return !empty($ci->session->userdata('id_user'));
    }
}