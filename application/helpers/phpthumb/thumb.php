<?php
class Thumb extends Controller {
	function Thumb(){
		parent::Controller();
		$this->load->helper('thumbnail');
	}
	
	function index(){
		
		$source_file = 'D:/wwwroot/ci_172/thumbnails/test.jpg';
		$output_file = 'D:/wwwroot/ci_172/thumbnails/tes2.jpg';
		$output_file2 = 'D:/wwwroot/ci_172/thumbnails/tes3.jpg';
		
		$o = resize_image($source_file, $output_file, 540, 300);
		$o = resize_image($source_file, $output_file2, 150, 250);

	}
	
}
/* End of file thumb.php */
/* Location: ./system/application/controllers/thumb.php */