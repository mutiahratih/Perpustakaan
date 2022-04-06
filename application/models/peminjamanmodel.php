<?php

class peminjamanmodel extends CI_Model {

    function __construct()
    {
        $this->load->database();
    } 
    function get_peminjaman()
    {
        $query = $this->db->query("SELECT * FROM peminjaman");
        return $query->result_array();
    }
    function get_detail($a)
    {
        $this->db->where('id', $a);
        return $this->db->get('peminjaman')->row_array();
    }

    function insert($a)
    {
        $data = [
            'namapeminjam' => $a['namapeminjam'],
            'bukupinjaman' => $a['bukupinjaman'],
            'tanggalpeminjaman' => $a['tanggalpeminjaman'],
            'tanggalpengembalian' => $a['tanggalpengembalian']
        ];
        return $this->db->insert('peminjaman', $data);
    }

    function update($a, $id)
    {
        $data = [
            'judul' => $a['judul'],
            'penulis' => $a['penulis'],
            'penerbit' => $a['penerbit']
        ];
        $this->db->where('id', $id);
        return $this->db->update('peminjaman', $data);
    }

    function update_cover($a, $id)
    {
        $data = [
            'cover' => $a
        ];
        $this->db->where('id', $id);
        return $this->db->update('peminjaman', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('peminjaman');
    }
}