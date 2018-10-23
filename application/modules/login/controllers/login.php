<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Login extends MX_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {

        $data['usuario'] = $this->data_users();
        $this->load->view('login', $data);
    }
    public function registro() {

        $data['usuario'] = $this->data_users();
        $this->load->view('registro', $data);
    }
    public function data_users() {

        return $this->Login_model->get_users();
    }

    public function login() {
        echo $this->Login_model->login();         
        echo 'esto es un ' ;
    }

}
