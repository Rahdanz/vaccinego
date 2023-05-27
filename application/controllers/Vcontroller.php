<?php
class Vcontroller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Vmodel');
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('users/Vview');
    }
    public function page_kedua($nilai) {
        $this->load->model('Vmodel'); // Memuat model 'User_model'
        $data['datafaskes'] = $this->Vmodel->tampil_datafaskes($nilai); // Mengambil data pengguna berdasarkan ID
        $this->load->view('users/Vpage2',$data);
    }
    public function page_daftar($nilai){
        // takut kepake buat validasi langsung sisa kuota db 
        $this->load->model('Vmodel'); // Memuat model 'User_model'
        $data['datafaskes'] = $this->Vmodel->tampil_datafaskes($nilai); // Mengambil data pengguna berdasarkan ID
        $this->load->view('users/Vdaftar',$data);
    }
    public function page_gagal(){
        $this->load->view('users/authent/gagal');
    }
    public function page_sukses($nik){
        $this->load->model('Vmodel'); // Memuat model 'User_model'
        $data['datauser'] = $this->Vmodel->tampil_datauser($nik); // Mengambil data pengguna berdasarkan ID
        $this->load->view('users/authent/sukses',$data);
    }//*

    public function tambah_data(){
        $nik=$this->input->post('nik');
		$nama = $this->input->post('nama');
        $tl=$this->input->post('tl');
        $jk=$this->input->post('jk');
        $tal=$this->input->post('tal'); 
        $nt=$this->input->post('nt');
        $nw=$this->input->post('nw');
        $email=$this->input->post('email');
        $pekerjaan=$this->input->post('pekerjaan');
        $vk=$this->input->post('vk');
        $nf=$this->input->post('nf');
        $sk=$this->input->post('sk');

        if($nik==null || $nama==null || $nama==null|| $nama==null|| $nama==null|| $nama==null|| $nama==null|| $nama==null|| $nama==null|| $nama==null ){
            redirect('Vcontroller/page_gagal');
            return;
            
        }
         
        else{
		$data = array(
			'nik' => $nik,
            'nama' => $nama,
			'tempatlahir' => $tl,
            'jeniskelamin' => $jk,
            'tanggallahir' => $tal,
            'notelp' => $nt,
            'nowa' => $nw,
            'email' => $email,
            'pekerjaan' => $pekerjaan,
            'vaksinke' => $vk,
            'namafaskes' => $nf,
       	);
        // ini buat db sisakuota
           $where=array('namafaskes'=>$nf);
           $updatekuota=array('sisakuota'=>$sk);

        // $data berisi array data dan sampingnya nama table
		$this->Vmodel->input_data($data,'tbluser');
        $this->Vmodel->update_datakuota($where,'tblfaskes', $updatekuota);
        redirect("Vcontroller/page_sukses/$nik"); //*
    }
    }
   
}
// public function page_admin(){
//     $this->load->view('admin/Vadmin');
// }

// $this->load->view('user_data_view', $data); // Menampilkan data ke view 'user_data_view'
//     $datafaskes['info']=$this->Vmodel->tampil_datafaskes()->result();

