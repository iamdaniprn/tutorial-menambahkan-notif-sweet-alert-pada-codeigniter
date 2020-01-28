<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
      	parent::__construct();
      	$this->load->model('m_siswa');
	}

	public function index()
	{
		$data['data_siswa'] = $this->m_siswa->data_siswa();
		$this->load->view('siswa/data_siswa', $data);
	}

	public function tambah()
	{
		$this->load->view('siswa/tambah');
	}

	public function simpan()
	{
		$data = [
            "nama" => $this->input->post('nama', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "alamat" => $this->input->post('alamat', true)
        ];

        $simpan = $this->m_siswa->simpan($data);
        if($simpan){
        	header('location:'.base_url().'index.php/siswa');
		    $this->session->set_flashdata("pesan", "simpan_sukses");
        }else{
			header('location:'.base_url().'index.php/siswa/tambah');
		    $this->session->set_flashdata("pesan", "simpan_gagal");
		}
	}

	public function lihat($id_siswa)
	{
		$data['data_siswa'] = $this->m_siswa->lihat($id_siswa);
		$this->load->view('siswa/lihat', $data);
	}

	public function edit($id_siswa)
	{
		$data['data_siswa'] = $this->m_siswa->edit($id_siswa);
		$this->load->view('siswa/edit', $data);
	}

	public function update()
	{
		$id_siswa = $this->input->post('id_siswa', true);

		$data = [
            "nama" => $this->input->post('nama', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "alamat" => $this->input->post('alamat', true)
        ];

        $update = $this->m_siswa->update($data, $id_siswa);
        if($update){
        	header('location:'.base_url().'index.php/siswa');
		    $this->session->set_flashdata("pesan", "update_sukses");
        }else{
			header('location:'.base_url().'index.php/edit/'.$id_siswa);
		    $this->session->set_flashdata("pesan", "update_gagal");
		}
	}

	public function hapus($id_siswa)
	{
		$hapus = $this->m_siswa->hapus($id_siswa);
		if($hapus){
			header('location:'.base_url().'index.php/siswa');
		    $this->session->set_flashdata("pesan", "hapus_sukses");
		}
	}
}
