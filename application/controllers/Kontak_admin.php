<?php
class Kontak_admin extends CI_Controller {

    public function index()  
    {
        $data['title'] = 'Halaman laporan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kontak']= $this->m_kontak->tampil_data()->result();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar',$data);
        $this->load->view('kontak_admin',$data);
        $this->load->view('admin/footer');
    }

}