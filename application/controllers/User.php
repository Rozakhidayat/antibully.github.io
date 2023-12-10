<?php
class User extends CI_Controller {

    public function index() 
    
    {
        $data['title'] = 'Halaman Antibully';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('lapor');
        $this->load->view('templates/footer');
    }

}
?>