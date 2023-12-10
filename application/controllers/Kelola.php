<?php
class Kelola extends CI_Controller {

    public function index()  
    {
        $data['title'] = 'Halaman laporan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kelola']= $this->m_lapor->tampil_data()->result();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar',$data);
        $this->load->view('kelola',$data);
        $this->load->view('admin/footer');
    }

    public function hapus ($id)
    {
        $where = array('id' => $id);
        $this->m_lapor->hapus_data($where, 'laporan');
        redirect('kelola');
    }

    public function edit($id){
        $data['title'] = 'Halaman Antibully';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['kelola'] = $this->m_lapor->edit_data($where,'laporan')->result();

        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar',$data);
        $this->load->view('edit',$data);
        $this->load->view('admin/footer');
    }

    public function update()
    {
        $id =$this->input->post('id');
        $nama =$this->input->post('nama');
        $kelas =$this->input->post('kelas');
        $alamat =$this->input->post('alamat');
        $no_hp =$this->input->post('no_hp');
        $tgl_kejadian =$this->input->post('tgl_kejadian');
        $deskripsi =$this->input->post('deskripsi');

        $data = array(
            'nama' => $nama,
            'kelas' => $kelas,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'tgl_kejadian' => $tgl_kejadian,
            'deskripsi' => $deskripsi
            
        );

        $where = array(
            'id' => $id
        );

        $this->m_lapor->update_data($where, $data, 'laporan');
        redirect('kelola');



    }

}