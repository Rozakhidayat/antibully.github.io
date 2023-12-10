<?php
class Profile_admin extends CI_Controller {

    public function index() 
    
    {
        $data['title'] = 'My profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar',$data);
        $this->load->view('profile');
        $this->load->view('admin/footer');
    }



}
?>