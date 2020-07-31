<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public $data = array();

    public function __construct()
    {
        parent::__construct();
    }
    
	public function index($slug = 'home')
	{
        if($slug=='home')
        {

        }
        $this->data['container'] = 'template/container/'.$slug;
        array_push($this->data['styles'] , 'assets/css/'.$slug.'.css');
        array_push($this->data['scripts'], 'assets/css/'.$slug.'.js');
        $this->load->view('home',$data);
	}

	public function test(){
		echo "HI";
	}
}
