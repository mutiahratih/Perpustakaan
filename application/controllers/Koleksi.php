<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koleksi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation','email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        $this->load->model('koleksimodel');
    }

    function index()
    {
        $data['list'] = $this->koleksimodel->get_koleksi();

        $this->load->view('koleksi/koleksi', $data);
    }

    public function detail($a = null)
    {
        $data['detail'] = $this->koleksimodel->get_detail($a);
        $this->load->view('koleksi/detail', $data);
    }

    public function add()
    {
        $this->load->view('koleksi/add');
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
        if ($this->koleksimodel->insert($this->input->post(), $cover)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('koleksi'));
        }
    }

    public function edit($a)
    {
        $data['detail'] = $this->koleksimodel->get_detail($a);
        $this->load->view('koleksi/edit', $data);
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
            $this->koleksimodel->update_cover($cover, $id);
        }
        if ($this->koleksimodel->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('koleksi'));
        }
    }

    public function delete($id)
    {
        if ($this->koleksimodel->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
            redirect(base_url('koleksi'));
        }
    }
}