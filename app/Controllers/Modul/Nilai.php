<?php

namespace App\Controllers\Modul;

use CodeIgniter\Controller;

class Nilai extends Controller
{
    var $folder =   "Nilai";
    var $tables =   "app_nilai_grade";
    var $pk     =   "nilai_id";
    var $title  =   "Grade Nilai";
    var $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $data['record'] =  $this->db->table($this->tables)->get();
        $data['title']  = $this->title;
        $data['desc']    =   "";
        $data['pk'] =  $this->pk;
        echo view('nilai/view', $data);
    }
    function post()
    {

        if (isset($_POST['submit'])) {
            var_dump($_POST);
            die();
            $grade   =   $this->input->post('grade');
            $dari    =   $this->input->post('dari');
            $sampai  =   $this->input->post('sampai');
            $ket     =   $this->input->post('keterangan');
            $data    =   array('grade' => $grade, 'dari' => $dari, 'sampai' => $sampai, 'keterangan' => $ket);
            $data['record'] = $this->db->table($this->tables)->insert();
            redirect('modul/nilai');
        } else {
            $data['title']  = $this->title;
            $data['desc']    =   "";
            echo view('nilai/post', $data);
        }
    }
    function edit()
    {
        if (isset($_POST['submit'])) {
            $id     = $this->input->post('id');
            $grade   =   $this->input->post('grade');
            $dari    =   $this->input->post('dari');
            $sampai  =   $this->input->post('sampai');
            $ket     =   $this->input->post('keterangan');
            $data    =   array('grade' => $grade, 'dari' => $dari, 'sampai' => $sampai, 'keterangan' => $ket);
            $this->mcrud->update($this->tables, $data, $this->pk, $id);
            redirect($this->uri->segment(1));
        } else {
            $data['title']  = $this->title;
            $data['desc']    =   "";
            $id          =  $this->uri->segment(3);
            $data['r']   =  $this->mcrud->getByID($this->tables,  $this->pk, $id)->row_array();
            $this->template->load('template', $this->folder . '/edit', $data);
        }
    }
    function delete()
    {
        $id     =  $this->uri->segment(3);
        $chekid = $this->db->get_where($this->tables, array($this->pk => $id));
        if ($chekid > 0) {
            $this->mcrud->delete($this->tables,  $this->pk,  $this->uri->segment(3));
        }
        redirect($this->uri->segment(1));
    }
}
