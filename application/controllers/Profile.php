<?php
class Profile extends CI_Controller {

    public function index() 
    
    {
        $data['title'] = 'My profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('profile');
        $this->load->view('templates/footer');
    }



}
?>