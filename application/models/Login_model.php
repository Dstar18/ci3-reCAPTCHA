<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function login($username, $password){
        if($username == "admin" && $password == "Admin123"){
            return to_obj([
                "result" => "Login Berhasil !!"
            ]);
        }else{
            return to_obj([
                "error" => "Gagal! username/password salah"
            ]);
        }
    }
}