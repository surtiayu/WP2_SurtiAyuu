<?php
class Datasiswa extends CI_Controller
{
	function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
	
	public function index()
	{
		$this->load->view('view-form-siswa');
	}
	
	public function cetak()
	{
		$this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]', [
			'required' => 'Nama Siswa Harus diisi',
			'min_lenght' => 'Nama terlalu pendek'
		]);
		
		$this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
			'required' => 'NIS Harus diisi',
			'min_lenght' => 'NIS terlalu pendek'
		]);

		$this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', [
			'required' => 'Kelas Harus diisi',
			'min_lenght' => 'Kelas terlalu pendek'
		]);

		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required|min_length[3]', [
			'required' => 'Tempat Lahir Harus diisi',
			'min_lenght' => 'Tempat Lahir terlalu pendek'
		]);

		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|min_length[3]', [
			'required' => 'Tanggal Lahir Harus diisi',
			'min_lenght' => 'Tanggal Lahir terlalu pendek'
		]);

		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]', [
			'required' => 'Alamat Harus diisi',
			'min_lenght' => 'Alamat terlalu pendek'
		]);
			
		if ($this->form_validation->run() != true) {
			$this->load->view('view-form-siswa');
			} 
		else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nis' => $this->input->post('nis'),
				'kelas' => $this->input->post('kelas'),
				'tmpt_lahir' => $this->input->post('tmpt_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'alamat' => $this->input->post('alamat'),
				'jns_klmn' => $this->input->post('jns_klmn'),
				'agama' => $this->input->post('agama')
			];
		$this->load->view('view-data-siswa', $data);
		}
	}
}
