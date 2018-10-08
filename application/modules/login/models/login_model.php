<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user($usu_id) {

        $query = $this->db->get_where('usuario', array('usu_id' => $usu_id));

        return $query->row();
    }

    public function get_users() {

        $query = $this->db->get('usuario');

        return $query->result();
    }

}
