<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model{

    function validasi1($email){
    	$result = $this->db->query("SELECT * FROM tb_pengguna WHERE email='$email' LIMIT 1");
        return $result;
    }

    function validasi2($email,$password){
    	$result = $this->db->query("SELECT * FROM tb_pengguna WHERE email='$email' AND password=SHA2('$password', 224) LIMIT 1");
        return $result;
    }

   

} 