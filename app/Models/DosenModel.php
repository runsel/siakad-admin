<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{

    public $table = 'dosen';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL)
    {
        $this->db->escape_like_str('id', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('nidn', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('nama_dosen', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('tempat_lahir', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('tanggal_lahir', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('agama', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('jenis_kelamin', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('alamat', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('bidang_keahlian', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('jabatan', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('tlpn', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('status', $q) . "%' ESCAPE '!'";
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->escape_like_str('id', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('nidn', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('nama_dosen', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('tempat_lahir', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('tanggal_lahir', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('agama', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('jenis_kelamin', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('alamat', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('bidang_keahlian', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('jabatan', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('tlpn', $q) . "%' ESCAPE '!'";
        $this->db->escape_like_str('status', $q) . "%' ESCAPE '!'";
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
