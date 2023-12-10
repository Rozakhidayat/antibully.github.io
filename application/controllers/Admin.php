<?php
class Admin extends CI_Controller {

    public function index() 
    
    {
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/footer');
    }

}
?>