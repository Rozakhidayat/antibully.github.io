<?php

class M_kontak extends CI_Model {

    public function get_data()
    {
        return $this->db->get('kontak')->result_array();
    }

    public function input_data($data)
    {
        $this->db->insert('kontak',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
        Pesan anda telah berhasil terkirim! </div>');
        redirect('kontak');
    }

    public function tampil_data()
    {
        return $this->db->get('kontak');
    }

}

?>