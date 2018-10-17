<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Cont_form extends CI_Controller{
        function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->load->view('formulario/vista_form');
        }
    }
?>