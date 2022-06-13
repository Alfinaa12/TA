<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User_model extends CI_Model 
{
    public function get_user($u, $p)
    {
        //artinya: select * from user where username = $u and password = $p
        return $this->db->get_where('user', ['username' => $u, 'password'=> $p])->row_array();
    }             
    
    public function register()
    {
        $data = $this->input->post();
        $data['role'] = 'user';
        
        return $this->db->insert('user', $data);
    }
}


/* End of file User_model_model.php and path \application\models\User_model\User_model_model.php */
