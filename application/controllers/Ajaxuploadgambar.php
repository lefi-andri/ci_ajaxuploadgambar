<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ajaxuploadgambar extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
    }
    function index()
    {     
        //load view
        $this->load->view('index');
    }
    function uploadgambar()
    {
        if($_FILES['gambar']['size'] != 0 ){
            $config['upload_path'] = './assets/upload/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = uniqid();
            $config['max_size']     = '1000';
            $config['overwrite']     = TRUE;

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                $msg = '<div class="alert alert-danger">Gambar Gagal Di Upload '.$this->upload->display_errors().'</div>';
            } else {
                $foto = $this->upload->data('file_name');
                $msg = '<div class="alert alert-success">Gambar Berhasil Di Upload?</div>
                    <img src="'.base_url($config['upload_path'].'/'.$foto).'" class="img img-rounded" style="width:200px; height:200px;" />';
            }
            echo $this->input->post('nama').$msg;
        }
    }
}