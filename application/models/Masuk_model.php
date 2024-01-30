<?php defined('BASEPATH') or exit('No derect script access allowed');
class Masuk_model extends CI_Model
{
    protected $_table = 'tb_surat_masuk';
    protected $primasry = 'id';

    public function getAll()
    {
        return $this->db->where('is_active', 1)->get($this->_table)->result();
    }
    public function save()
        {
            $this->Masuk_model->save();
            if($this->db->affected_rows()>0){
                $this->session->set_flashdata("success","Data Surat Masuk Berhasil Disimpan");
            }
            redirect('admin/surat_masuk');
            }
    public function save(){
        $data = [
            'no_surat' =>$his->input->post('no_surat'),
            'tgl_surat' =>$this->input0>post('tgl_surat'),
            
        ]
    }
        }
    
