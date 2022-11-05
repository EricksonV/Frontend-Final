<?php
class Model_Ofertas extends CI_Model{

    public function ObtieneDatos(){
        $query = $this->db->get('zoo_ofertas');
        if (count($query->result())>0) {
            return $query->result();
        }
        
    }
}