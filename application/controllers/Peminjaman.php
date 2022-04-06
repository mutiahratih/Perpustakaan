<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation','email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        $this->load->model('peminjamanmodel');
    }

    function index()
    {
        $data['list'] = $this->peminjamanmodel->get_peminjaman();

        $this->load->view('peminjaman/peminjaman', $data);
    }

    public function detail($a = null)
    {
        $data['detail'] = $this->peminjamanmodel->get_detail($a);
        $this->load->view('peminjaman/detail', $data);
    }

    public function add()
    {
        $this->load->view('peminjaman/add');
    }

    public function insert()
    {
        // $cover = $_FILES['cover']['name'];
        // $config = [
        //     'upload_path' => "./assets/images/cover/",
        //     'allowed_types' => "gif|jpg|png|jpeg",
        //     'overwrite' => TRUE,
        //     'max_size' => "2048000"
        // ];
        $this->load->library('upload');
        // $this->upload->initialize($config);
        // $this->upload->do_upload('cover');
        if ($this->peminjamanmodel->insert($this->input->post())) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('koleksi'));
        }
    }

    public function edit($a)
    {
        $data['detail'] = $this->peminjamanmodel->get_detail($a);
        $this->load->view('peminjaman/edit', $data);
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
            $this->peminjamanmodel->update_cover($cover, $id);
        }
        if ($this->peminjamanmodel->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('peminjaman'));
        }
    }

    public function delete($id)
    {
        if ($this->peminjamanmodel->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
            redirect(base_url('peminjaman'));
        }
    }
}