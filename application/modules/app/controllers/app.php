<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->template->set_master_template('template_app.php');
    }

    public function index() {
        
        $vista = $this->load->view('login', "", true);
        $this->template->setTitle('login appmovil');
        $this->template->write('content',$vista); 
        $this->template->render(); //carga vistas
    }
    
    public function verificaDatosLogin(){
        $post = $this->input->post();
        
        echo "<pre>";
        print_r($post);
        
        $data['title'] = "Exitosa";
        $data['msg'] = "Si existe";
        echo $this->json->encode($data);
    }
    
    public function registro() {
        $this->load->view('registro', '');
    }

}
