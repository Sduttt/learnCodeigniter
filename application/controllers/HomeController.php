<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function index()
    {
        // $this->load->model('HomeModel');
        // $data = $this->HomeModel->queries();
        // echo "<pre>";
        // print_r($data);

        // foreach ($data as $value) {
        //     echo '<b>'.$value->uid.'. </b>'.'Name: '.$value->uname.', Email: '.$value->email.'; <br>';
        // }

        // $this->load->helper('form');
        // $array = array("fname" => "subham", "lname" => 'Dutta');
        // print_Arr($array);
        // print_r($array);

        // $this->load->library('custom');

        $this->load->view('form');
    }

    public function formval()
    {

        if ($this->form_validation->run()) {
            $this->load->model('HomeModel');

            $postData = $this->input->post();


            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpeg|gif|jpg|png';

            $this->load->library('upload', $config);

            // if(empty($_FILES['picture']['name'])){
            //     $this->form_validation->set_rules('document', 'Image', 'required');
            // }
            $uploadStatus = $this->upload->do_upload('picture');
            if (!$uploadStatus) {
                $error = $this->upload->display_errors();
                print_r($error);
            } else {
                $data = $this->upload->data();
                $postData['picture'] = $data['file_name'];
                echo '<pre>';
                print_r($postData);
                echo "File uploaded successfully";

                $this->HomeModel->add_data($postData);

            }


            echo "Submitted";
        } else {
            // $this -> form_validation -> set_error_delimiters('<div class="text-danger">', '</div>');
            $this->load->view("form");
        }
    }
}