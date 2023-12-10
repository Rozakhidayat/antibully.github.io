<?php
class Kontak extends CI_Controller {

    public function index()  
    {
        $data['title'] = 'Halaman Kontak';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('kontak');
        $this->load->view('templates/footer');
    }

    public function model_kontak(){

        $this->load->model('m_kontak');
        $data['Kontak']= $this->m_kontak->get_data();

    }


    public function tambah()  
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $pesan = $this->input->post('pesan');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $no_hp,
            'pesan' => $pesan,
            
        );

        $this ->m_kontak->input_data($data, 'kontak');
        redirect('kontak/index');
        
        
    }


}

?>