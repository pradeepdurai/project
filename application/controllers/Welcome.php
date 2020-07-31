<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $name = $this->input->post("name");
		// $salary = $this->input->post("salary");
		//$data = json_decode(file_get_contents("php://input"));
		//print_r($data);exit;
		// if($this->input->raw_input_stream)
		// {
		// 	echo "ok";
		// 	$input_data = json_decode($this->input->raw_input_stream, true);
		// 	print_r($input_data);exit;
		// }
		// elseif($this->input->post()){
		// 	$data = $this->input->post();
		// 	print_r($data); exit;
		// }
		// else{
		// 	echo "nono";exit;
		// }
		// $this->load->model("sample");
		// $this->sample->sampl($data);
		$this->load->view('welcome_message');
	}

	public function test(){
		echo "HI";
	}
}
