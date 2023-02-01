<?php 
 
class member extends CI_Controller{  
    function __construct(){ 
        parent::__construct(); 
        $this->load->model('Mcrud'); 
        $this->load->model('Madmin');  
        $this->load->model('Mlogin');
        $this->load->model('Mfrontend');
        $this->load->model('M_member');
    }  
     
    private function cek_login(){ 
        if(empty($this->session->userdata('userName'))){ 
			redirect('adminpanel/dashboard');
		 } 
    } 
         

    public function index(){   

        $data['member']=$this->Madmin->get_member('')->result();
        $this->template->load('layout_admin','admin/member/index', $data);
    }    
     
    public function aktif($id){  
   

        $dataUpdate = array('statusAktif' => 'Y');   
        $this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen', $id); 
        redirect('memberr/member');
    }  
     
    public function non_aktif($id){  
        $dataUpdate = array('statusAktif' => 'N');   
        $this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen', $id); 
        redirect('memberr/member');
    } 
     
    public function add(){  

        $data['member']=$this->Mcrud->get_all_data('tbl_member')->result(); 
        $data['kota']=$this->Mcrud->get_all_data('tbl_kota')->result();
        $this->template->load('layout_admin','admin/member/member_add', $data);
    } 
     
    public function save(){  
   
        $idKonsumen = $this->input->post('idKonsumen'); 
        $username = $this->input->post('username'); 
        $password = $this->input->post('password'); 
        $namaKonsumen = $this->input->post('namaKonsumen'); 
        $alamat = $this->input->post('alamat'); 
        $idKota = $this->input->post('idKota');  
        $email = $this->input->post('email'); 
        $tlpn = $this->input->post('tlpn');
        $dataInsert = array('idKonsumen'=>$idKonsumen, 'username'=>$username, 'password'=>$password,'namaKonsumen'=>$namaKonsumen, 'alamat'=>$alamat, 'idKota'=>$idKota, 'email'=>$email, 'tlpn'=>$tlpn); 
        $this->Mcrud->insert('tbl_member', $dataInsert); 
        if($this->db->affected_rows() > 0 ) {
            $this->session->set_flashdata('success','Data Berhasil Disimpan');    
            }
        redirect('memberr/member');

    } 

}