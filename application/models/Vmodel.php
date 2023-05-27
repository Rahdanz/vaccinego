<?php
class Vmodel extends CI_Model {
    public $tblfaskes='tblfaskes'; //ini masih belom dipake
    public function tampil_datafaskes($nilai){
        $query = $this->db->get_where('tblfaskes', array('kodefaskes' => $nilai)); // Mengambil data dari tabel 'faskes' berdasarkan ID
        return $query->row(); //
        // $query = $this->db->get();
        // return $query->result_array();
    }
    public function input_data($data,$table){
        $this->db->insert($table,$data);
    } 
    function update_datakuota($where,$table,$data){
            $this->db->where($where);
            $this->db->update($table,$data);
    }
    public function tampil_datauser($nik){
        $query = $this->db->get_where('tbluser', array('nik' => $nik)); // Mengambil data dari tabel 'users' berdasarkan ID
        return $query->row(); //
        // $query = $this->db->get();
        // return $query->result_array();
    } //*
}