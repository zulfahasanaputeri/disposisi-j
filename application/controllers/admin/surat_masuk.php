<?php
defined('BASAPASTH') or exit('No direct script access allowed');

class Surat_masuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Masuk_model");
        cek_login();
        cek_user();
        $his->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' => 'View Data Suat Masuk',
            'surat' => $this->Masuk_model->getAll(),
            'content' => 'admin/surat_masuk/index'
        );
        $this->load->view('admin/template/main', $data);
    }
    public function add()
    {
        $data = array(
            'title' => 'Tambah Data Surat Masuk',
            'content' => 'admin/surat_masuk/add_form'
        );
        $this->load->view('admin/template/main', $data);
    }
}
