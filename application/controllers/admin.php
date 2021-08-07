<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProfileModel');
        $this->load->model('PendidikanModel');
        $this->load->model('PengalamanModel');
        $this->load->model('KontakModel');

        $this->user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }
    
    public function index()
    {
        $data['allprofile'] = $this->ProfileModel->get_all_data_profile();
        $data['title'] = "Data Profile";
        $data['user'] = $this->user;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin/footer');
    }

    function create()
    {
        $data['title'] = "Tambah Profile";
        $data['user'] = $this->user;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/create', $data);
        $this->load->view('templates/admin/footer');
    }

    function simpanprofile()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'gender' => $this->input->post('gender'),
            'kewarganegaraan' => $this->input->post('kewarganegaraan'),
            'agama' => $this->input->post('agama'),
            'gol_darah' => $this->input->post('gol_darah'),
            'status' => $this->input->post('status'),
            'alamat' => $this->input->post('tgl_lahir'),
            'foto' => $this->input->post('foto'),
        ];
        $this->db->insert('pribadi', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>');

        redirect('admin/index');
    }

    function edit($id)
    {
        $data['title'] = "Edit Profile";
        $data['pribadi'] = $this->db->get_where('pribadi', ['id' => $id])->row_array();
        $data['user'] = $this->user;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/edit', $data);
        $this->load->view('templates/admin/footer');
    }

    public function editprofile()
    {

        $this->db->set('nama', $this->input->post('nama'));
        $this->db->set('tgl_lahir', $this->input->post('tgl_lahir'));
        $this->db->set('gender', $this->input->post('gender'));
        $this->db->set('kewarganegaraan', $this->input->post('kewarganegaraan'));
        $this->db->set('agama', $this->input->post('agama'));
        $this->db->set('gol_darah', $this->input->post('gol_darah'));
        $this->db->set('status', $this->input->post('status'));
        $this->db->set('alamat', $this->input->post('alamat'));
        $this->db->set('foto', $this->input->post('foto'));
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pribadi');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data sudah diedit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>');

        redirect('admin/index');
    }

    function hapus($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('pribadi');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>');

        redirect('admin/index');
    }

    // Tabel Pendidikan
    function pendidikan_page()
    {
        $data['allpendidikan'] = $this->PendidikanModel->get_all_data_pendidikan();
        $data['title'] = "Daftar Pendidikan";
        $data['user'] = $this->user;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/pendidikan_page', $data);
        $this->load->view('templates/admin/footer');
    }

    function pendidikan_create()
    {
        $data['title'] = "Tambah Pendidikan";
        $data['user'] = $this->user;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/pendidikan_create', $data);
        $this->load->view('templates/admin/footer');
    }

    function simpanpendidikan()
    {
        $data = [
            'tingkat' => $this->input->post('tingkat'),
            'nama_tempat' => $this->input->post('nama_tempat'),
            'tahun' => $this->input->post('tahun'),
        ];
        $this->db->insert('pendidikan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>');

        redirect('admin/pendidikan_page');
    }

    function pendidikan_edit($pendidikan_id)
    {
        $data['title'] = "Edit Pendidikan";
        $data['pendidikan'] = $this->db->get_where('pendidikan', ['pendidikan_id' => $pendidikan_id])->row_array();
        $data['user'] = $this->user;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/pendidikan_edit', $data);
        $this->load->view('templates/admin/footer');
    }

    public function editpendidikan()
    {

        $this->db->set('tingkat', $this->input->post('tingkat'));
        $this->db->set('nama_tempat', $this->input->post('nama_tempat'));
        $this->db->set('tahun', $this->input->post('tahun'));
        $this->db->where('pendidikan_id', $this->input->post('pendidikan_id'));
        $this->db->update('pendidikan');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data sudah diedit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>');

        redirect('admin/pendidikan_page');
    }

    function pendidikan_hapus($pendidikan_id)
    {

        $this->db->where('pendidikan_id', $pendidikan_id);
        $this->db->delete('pendidikan');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>');

        redirect('admin/pendidikan_page');
    }

    function pengalaman_page()
    {
        $data['allpengalaman'] = $this->PengalamanModel->get_all_data_pengalaman();
        $data['title'] = "Daftar Pengalaman Kerja";
        $data['user'] = $this->user;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/pengalaman_page', $data);
        $this->load->view('templates/admin/footer');
    }

    function pengalaman_create()
    {
        $data['title'] = "Tambah Pengalaman Kerja";
        $data['user'] = $this->user;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/pengalaman_create', $data);
        $this->load->view('templates/admin/footer');
    }

    function simpanpengalaman()
    {
        $data = [
            'nama_tempat' => $this->input->post('nama_tempat'),
            'jabatan' => $this->input->post('jabatan'),
            'masa_jabatan' => $this->input->post('masa_jabatan'),
            'deskripsi' => $this->input->post('deskripsi'),
        ];
        $this->db->insert('pekerjaan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>');

        redirect('admin/pengalaman_page');
    }

    function pengalaman_edit($pekerjaan_id)
    {
        $data['title'] = "Edit Pengalaman Kerja";
        $data['pekerjaan'] = $this->db->get_where('pekerjaan', ['pekerjaan_id' => $pekerjaan_id])->row_array();
        $data['user'] = $this->user;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/pengalaman_edit', $data);
        $this->load->view('templates/admin/footer');
    }

    public function editpengalaman()
    {

        $this->db->set('nama_tempat', $this->input->post('nama_tempat'));
        $this->db->set('jabatan', $this->input->post('jabatan'));
        $this->db->set('masa_jabatan', $this->input->post('masa_jabatan'));
        $this->db->set('deskripsi', $this->input->post('deskripsi'));
        $this->db->where('pekerjaan_id', $this->input->post('pekerjaan_id'));
        $this->db->update('pekerjaan');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data sudah diedit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>');

        redirect('admin/pengalaman_page');
    }

    function pengalaman_hapus($pekerjaan_id)
    {

        $this->db->where('pekerjaan_id', $pekerjaan_id);
        $this->db->delete('pekerjaan');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>');

        redirect('admin/pengalaman_page');
    }
   
    function kontak_page()
    {
        $data['allkontak'] = $this->KontakModel->get_all_data_kontak();
        $data['title'] = "Daftar Kontak";
        $data['user'] = $this->user;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/kontak_page', $data);
        $this->load->view('templates/admin/footer');
    }

    function kontak_create()
    {
        $data['title'] = "Tambah Kontak";
        $data['user'] = $this->user;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/kontak_create', $data);
        $this->load->view('templates/admin/footer');
    }

    function simpankontak()
    {
        $data = [
            'kontak' => $this->input->post('kontak'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->db->insert('kontak', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>');

        redirect('admin/kontak_page');
    }

    function kontak_edit($kontak_id)
    {
        $data['title'] = "Edit Kontak";
        $data['kontak'] = $this->db->get_where('kontak', ['kontak_id' => $kontak_id])->row_array();
        $data['user'] = $this->user;

        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/kontak_edit', $data);
        $this->load->view('templates/admin/footer');
    }

    public function editkontak()
    {

        $this->db->set('kontak', $this->input->post('kontak'));
        $this->db->set('keterangan', $this->input->post('keterangan'));
        $this->db->where('kontak_id', $this->input->post('kontak_id'));
        $this->db->update('kontak');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data sudah diedit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>');

        redirect('admin/kontak_page');
    }

    function kontak_hapus($kontak_id)
    {

        $this->db->where('kontak_id', $kontak_id);
        $this->db->delete('kontak');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>');

        redirect('admin/kontak_page');
    }
}
