<?php 

class Main extends CI_Controller{

    public $data = array();
    
    public  function __contruct(){
        
        
        parent::__construct();
        
        
        
    }

    public function index(){
        $data['styles'] = array();
        $data['scripts'] = array();
        $data['view'] = 'view/home';
        array_push($data['styles'],"assets/css/style.css");
        $this->load->view('load', $data);
    }
}

?>