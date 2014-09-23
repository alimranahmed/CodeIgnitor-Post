<?php

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }

    function index() {
        $class_name = array(
            'home_class' => '',
            'login_class' => '',
            'register_class' => '',
            'upload_class' => 'current',
            'contact_class' => '');
        
        $this->load->view('header',$class_name);
        $this->load->view('v_upload_form', array('error' => ' '));
        $this->load->view('footer');
    }

    function upload_file() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048'; //in KB
        $config['max_width'] = '1024'; //in px
        $config['max_height'] = '768'; //in px

        $this->load->library('upload', $config);

        $class_name = array(
            'home_class' => '',
            'login_class' => '',
            'register_class' => '',
            'upload_class' => 'current',
            'contact_class' => '');

        if (!$this->upload->do_upload()) {//If there is error when uploading file
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('header', $class_name);
            $this->load->view('v_upload_form', $error);
            $this->load->view('footer');
        } else {
            $data = array('upload_data' => $this->upload->data());
            //RESIZE IMAGE if you want(optional)
            $this->resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);

            $this->load->view('header', $class_name);
            $this->load->view('v_upload_success', $data);
            $this->load->view('footer');
        }
    }

    function resize($path, $file) {//Resizing a file;
        $config['image_library'] = 'gd2';
        $config['source_image'] = $path;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = '200';
        $config['height'] = '200';
        $config['new_image'] = './uploads/' . $file;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }

}
