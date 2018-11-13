<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Inicio extends MX_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('login_model');
        $this->template->set_master_template('template_app.php');
    }

    public function inicio() {
        
        $data['usuario'] = $this->data_users();
        $vista = $this->load->view('inicio', $data, true);
        $this->template->setTitle('Busca viaje');
        $this->template->write('content',$vista); 
        
        $this->template->render(); //carga vistas
    }


}
