<?php
class Lapor extends CI_Controller {

    public function index()  
    {
        $data['title'] = 'Halaman laporan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('lapor');
        $this->load->view('templates/footer');
    }

    public function model_lapor(){

        $this->load->model('m_lapor');
        $data['Lapor']= $this->m_lapor->get_data();

    }


    public function tambah_aksi()  
    {
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $tanggal_kejadian = $this->input->post('tgl_kejadian');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'nama' => $nama,
            'kelas' => $kelas,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'tgl_kejadian' => $tanggal_kejadian,
            'deskripsi' => $deskripsi,
        );

        $this ->m_lapor->input_data($data, 'laporan');
        redirect('lapor/index');
        
        
    }


}

?>