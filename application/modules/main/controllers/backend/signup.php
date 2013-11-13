<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('captcha_helper');
	}

	function index()
	{
		$data['title']="User Backend Panel";
		//-----------------------------------------captcha work start-----------------------
	//If there is already session for captcha_word, put it in last_captcha_word.
	 	   if($this->session->userdata('captcha_word'))
		   {
			 //New array to be inserted into the session userdata under key last_captcha_word
			 $sess_data =
			 array('last_captcha_word' =>strtolower($this->session->userdata('captcha_word')));
		
			 //Set the key last_captcha_word with the word previously generated.
			 $this->session->set_userdata($sess_data);
		   }
		   /*Otherwise we don't have userdata key with captcha_word, so we will create new one
		   
			Values for the captcha, note that img_url worked for me if i put something like:
			http://mywebsite.com/images/captcha
			it will expire in 2 minutes.
			*/
			$vals = array(
			'img_path' => './assets/images/captcha/',
			'img_url'     => base_url().'assets/images/captcha/',
			'font_path'     => '../fonts/font.ttf',
			'img_width'     => '195',
			'img_height' => 40,
			'expiration' => 120
			);
			
			//Create the captcha and assign it to an array cap.
			$cap = create_captcha($vals);
		
			//Create session userdata with key captcha_word and value of the $cap['word'] key.
			$sess_new_data = array('captcha_word' => strtolower($cap['word']));
			$this->session->set_userdata($sess_new_data);
			$data['cap'] = $cap;
		//-----------------------------------------captcha work end-------------------------

		$this->load->view('backend/signup/signup_view',$data);
		//$this->load->view('dashboard/inner_view');
	}
	
	function dashboard_offer()
	{
	 sleep(2);
	 $id=$this->input->post('id');
	 $offer_name=$this->input->post('offer_name');
	 $data['offer_name']=$offer_name;
	 $this->load->view('dashboard/inner_view',$data);
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */