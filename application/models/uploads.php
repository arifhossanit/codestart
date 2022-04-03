<?php if (! defined('BASEPATH')) exit('No direct script  
  access allowed');
class Uploads extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    public function file_Upload($file_name) {
      $this->load->database();
      $this->db->set('file_name',$file_name);
      $this->db->insert('users');
      // $this->db->query("insert into users (file_name) values('$file_name')");
    }
}