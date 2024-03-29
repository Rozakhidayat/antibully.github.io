<?php

class M_lapor extends CI_Model {

    public function get_data()
    {
        return $this->db->get('laporan')->result_array();
    }

    public function input_data($data)
    {
        $this->db->insert('laporan',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
        Selamat Laporan anda berhasil dibuat! </div>');
        redirect('lapor');
    }

    public function tampil_data()
    {
        return $this->db->get('laporan');
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table){
        return $this->db->get_where($table,$where);

    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    
}

?>