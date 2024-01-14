<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller{
    public function index(){
        // $this->load->model('HomeModel');
        // $data = $this->HomeModel->queries();
        // echo "<pre>";
        // print_r($data);

        // foreach ($data as $value) {
        //     echo '<b>'.$value->uid.'. </b>'.'Name: '.$value->uname.', Email: '.$value->email.'; <br>';
        // }

        $this ->load->helper('form');
        // $array = array("fname" => "subham", "lname" => 'Dutta');
        // print_Arr($array);
        // print_r($array);

        // $this->load->library('custom');

        $this->load->view('form');
    }
    public function formrec(){
        echo "Recieved";
    }
}