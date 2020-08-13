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
		$this->load->view('welcome_message');
	}
	
	public function lihat_info() {
echo "<head><title>Praktik CodeIgniter 2020</title></head>";
echo "<h1>Praktik CodeIgniter 2020</h1>";
echo "<h3>Presented by RPL BPI</h3>";
echo "CodeIgniter merupakan salah satu <i>web framework</i> PHP yang sangat mudah dan
menarik.";
echo "Saya menghadiri ini untuk mulai mengenal dan mempelajari CodeIgniter";
}
}
