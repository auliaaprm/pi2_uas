<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProfileModel');
        $this->load->model('PendidikanModel');
        $this->load->model('PengalamanModel');
        $this->load->model('KontakModel');

    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['profile_list'] = $this->ProfileModel->profile_get_list();

        $this->load->view('templates/user/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/user/footer');
    }

    function about()
	{
		$data['title'] = "Tentang Saya";

		$data['profile_list'] = $this->ProfileModel->profile_get_list();

        $this->load->view('templates/user/header', $data);
		$this->load->view('user/about', $data, FALSE);
        $this->load->view('templates/user/footer');
	}

    function education()
	{
		$data['title'] = "Riwayat Pendidikan";

		$data['pendidikan_list'] = $this->PendidikanModel->pendidikan_get_list();

        $this->load->view('templates/user/header', $data);
		$this->load->view('user/education', $data, FALSE);
        $this->load->view('templates/user/footer');
	}

    function experience()
	{
		$data['title'] = "Pengalaman Kerja";

		$data['pengalaman_list'] = $this->PengalamanModel->pengalaman_get_list();

        $this->load->view('templates/user/header', $data);
		$this->load->view('user/experience', $data, FALSE);
        $this->load->view('templates/user/footer');
	}

    function contact()
	{
		$data['title'] = "Kontak";

		$data['kontak_list'] = $this->KontakModel->kontak_get_list();

        $this->load->view('templates/user/header', $data);
		$this->load->view('user/contact', $data, FALSE);
        $this->load->view('templates/user/footer');
	}
}