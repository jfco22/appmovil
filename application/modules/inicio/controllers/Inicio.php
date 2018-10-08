<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->template->set_master_template('template.php');
		$this->template->setTitle('Ac Recambios');
	}
	
	public function index()
	{
		$vista = $this->load->view('inicio', '', TRUE);
        $this->template->write('content', $vista);
        $this->template->render();
	}
}
