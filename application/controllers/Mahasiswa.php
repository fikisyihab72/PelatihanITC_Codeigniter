<?php

/**
 * 
 */
class Mahasiswa extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_mahasiswa','mhs'); 
	}

	function index() 
	{

		if(!isset($this->session->login_status))
		{
			$this->load->view('view_login');
		}
		else
		{
			$data = $this->mhs->read();
			$this->load->view('view_dashboard',array('data' => $data)); 
		}

				
	}

	function insert_mahasiswa()
	{
		$nama=$this->input->post('nama');
		$nim=$this->input->post('nim');

		$data = array(
			'nama'=>$nama,
			'nim'=>$nim
		); 

		$cek = $this->mhs->insert($data); 

		if($cek>0)
		{
			echo "<script type='text/javascript'>alert('Berhasil Ditambah');</script>";
			
			
			$this->index();
		}
	}

	function delete_mahasiswa()
	{
		$id = $this->input->get('id'); 
		$cek = $this->mhs->delete($id);


		if($cek>0){
			echo "<script type='text/javascript'>alert('Berhasil Dihapus');</script>";
			$this->index();
		}
	}

	function update_mahasiswa()
	{
		$id = $this->input->get('id'); 

		$data = $this->mhs->getDataById($id);

		$this->load->view('view_formedit',array('data'=>$data));

	}

	function update_proses() 
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');

		$data = array( 
			'id' => $id,
			'nama' => $nama,
			'nim' => $nim
		);

		$cek = $this->mhs->update($id,$data);
		if($cek){
			echo "<script type='text/javascript'>alert('Berhasil Diedit');</script>";
			$this->index();
		}
		else{
			echo "<script type='text/javascript'>alert('Gagal Diedit');</script>";
			$this->index();
		}


	}


	function login()
	{
		$data['nama'] = $this->input->post('username');
		$data['nim'] = $this->input->post('password');

		$cek = $this->mhs->getLogin($data);

		if($cek->num_rows() > 0)
		{
			$data_session = array(
				'username' => $data['nama'],
				'login_status' => TRUE

			);

			$this->session->set_userdata($data_session);


			$this->index();
		}
		else
		{
			$this->index();
		}
	}

	function logout()
	{
		unset($_SESSION['username']);
		unset($_SESSION['login_status']);
		$this->index();
	}

}

?>