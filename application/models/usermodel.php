<?php

class usermodel extends CI_Model {

    function __construct()
    {
        $this->load->database();
    } 
    function get_user()
    {
        $query = $this->db->query("SELECT * FROM user");
        return $query->result_array();
    }
    function get_detail($a)
    {
        $this->db->where('id', $a);
        return $this->db->get('user')->row_array();
    }

    function insert($a, $cover)
    {
        $data = [
            'nama' => $a['nama'],
            'email' => $a['email'],
            'password' => $a['password'],
            'alamat' => $a['alamat'],
            'telepon' => $a['telepon']
        ];
        return $this->db->insert('user', $data);
    }

    function update($a, $id)
    {
        $data = [
            'nama' => $a['nama'],
            'email' => $a['email'],
            'password' => $a['password'],
            'alamat' => $A['alamat'],
            'telepon' => $a['telepon']
        ];
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    function update_cover($a, $id)
    {
        $data = [
            'cover' => $a
        ];
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }

    function auth($email, $pwd)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pwd);
        if ($this->db->get('user')->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function get_email($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('user')->row_array();
    }

    function get_detail_by_cookie($sesi)
    {
        $this->db->where('email', $email);
        return $this->db->get('user')->row_array();
    }

    function update_cookie($cookie, $email)
    {
        $data = [
            'cookie' => $cookie
        ];
        $this->db->where('email', $email);
        return $this->db->update('user', $data);
    }
}