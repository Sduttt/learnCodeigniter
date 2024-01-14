<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

    public function queries(){
        // $q = $this->db->query('select * from users where uid = "2"');
        return $this->db->where('uid', 1)->get('users')->result();
    }
}