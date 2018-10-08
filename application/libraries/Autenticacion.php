<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Autenticacion {

    public function __construct() {

        $this->CI = &get_instance();
    }

    public function validaLogin($usuario, $clave) {
        $this->CI->load->library("passwordhash");
        $this->CI->load->model('admin/administrador', 'adm');
        $user = $this->CI->adm->validaLog($usuario);
        $num_user = count($user);
        if ($num_user == 1) {
            if ($this->CI->passwordhash->CheckPassword($clave, $user->adm_clave)) {
                $this->creaSesion($usuario);
                redirect(base_url() . "admin/home", 301);
            } else {
                redirect(base_url() . "admin", 301);
            }
        } else {
            redirect(base_url() . "admin", 301);
        }
    }

    private function creaSesion($usuario) {
        $this->CI->native_session->set_userdata(array('usuario' => $usuario)); 
    }

}
