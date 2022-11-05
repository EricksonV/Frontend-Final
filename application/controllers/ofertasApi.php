<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class ofertasApi extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Model_Ofertas','ofertas');
    }

    public function index_get(){
        $datos = $this->ofertas->ObtieneDatos();
        $this->response($datos);    
    }    

}