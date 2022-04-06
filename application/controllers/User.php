<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation','email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        $this->load->model('usermodel');
    }

    function index()
    {
        $data['list'] = $this->usermodel->get_user();

        $this->load->view('user/user', $data);
    }

    public function detail($a = null)
    {
        $data['detail'] = $this->usermodel->get_detail($a);
        $this->load->view('user/detail', $data);
    }

    public function add()
    {
        $this->load->view('user/add');
    }

    public function insert()
    {
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('cover');
        if ($this->usermodel->insert($this->input->post(), $cover)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('user'));
        }
    }

    public function edit($a)
    {
        $data['detail'] = $this->usermodel->get_detail($a);
        $this->load->view('user/edit', $data);
    }

    public function update($id)
    {
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('cover')) {
            $this->usermodel->update_cover($cover, $id);
        }
        if ($this->usermodel->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('user'));
        }
    }

    public function delete($id)
    {
        if ($this->usermodel->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
            redirect(base_url('user'));
        }
    }
}