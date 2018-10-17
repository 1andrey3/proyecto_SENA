<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modelos extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function guardar($data)
{
    $this->db->insert('usuario', array('No_documento'=>$data['No_documento'],'Nombres'=>$data['Nombres'], 'apellidos'=>$data['Apellidos'],
'Email' => $data['Email'],'rol' => $data['Rol'] ));
    }
}
?>