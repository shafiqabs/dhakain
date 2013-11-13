<?php

/**
* @author Md Shafiqul Islam<shafiqabs@gmail.com>
* @package  e-commerce onclickbd
* @Global variable function
* @version 1.0
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image_model extends CI_Model
{


	function __construct()
	{
		parent::__construct();
		$this->load->library('image_lib');

	}





	

	function productimageupload($sizequery)

	{

		$agent_uid=$this->uri->segment(4,0);
        $product_id=$this->uri->segment(5,0);
        $image_size=$this->uri->segment(5,NULL);

        $this->db->where('product_id',$product_id);
        $result=$this->db->get('listing_product_image');
        if ($result->num_rows() == IMAGE_LIMIT ){
        	$this->session->set_flashdata('success_msg','This image cannot be uploaded more then '.IMAGE_LIMIT);
        	$msg ='This image cannot be uploaded more then '.IMAGE_LIMIT;

		}else{

		$large_width=$sizequery[0]->large_image_width;

		$large_height=$sizequery[0]->large_image_height;

		$square_width=$sizequery[0]->square_image_width;

		$square_height=$sizequery[0]->square_image_height;

		$thumb_width=$sizequery[0]->thumb_image_width;

		$thumb_height=$sizequery[0]->thumb_image_height;

		$small_width=$sizequery[0]->small_image_width;

		$small_height=$sizequery[0]->small_image_height;



			// IMAGE UPLOAD



		$up_filename = $_FILES['fileToUpload']['name']; 

		$temporary_name = $_FILES['fileToUpload']['tmp_name']; 

		$mimetype = $_FILES['fileToUpload']['type']; 

		$filesize = $_FILES['fileToUpload']['size']; 

		$output_file_path ='uploads/shop/'.$agent_uid.'/products/large/';

		$file_name = $this->prep_filename($up_filename);

   		$file_ext = $this->get_extension($up_filename);

   		$fileUp = $this->set_filename($output_file_path, $file_name, $file_ext);
		
		$source_file =$temporary_name;

		

		$large ='products/large'; 

		$this->create_dir_new($agent_uid,$large);

		$square ='products/square'; 

		$this->create_dir_new($agent_uid,$square);

		$thumb ='products/thumb'; 

		$this->create_dir_new($agent_uid,$thumb);

		$small ='products/small'; 

		$this->create_dir_new($agent_uid,$small);



		//crop_image

		

		$image_resize=$this->input->post('image_resize');

		$save_type=$this->input->post('save_type');

		$water_mark=$this->input->post('water_mark');


		$output_file_large = 'uploads/shop/'.$agent_uid.'/products/large/'.$fileUp;
        $output_file_square = 'uploads/shop/'.$agent_uid.'/products/square/'.$fileUp;
        $output_file_small = 'uploads/shop/'.$agent_uid.'/products/small/'.$fileUp;
        $output_file_thumb = 'uploads/shop/'.$agent_uid.'/products/thumb/'.$fileUp;

        if($save_type ==1){
            if($image_resize ==2){

                cropCenterImage($source_file, $output_file_large,$large_width,$large_height);
                cropCenterImage($source_file, $output_file_square,$square_width,$square_height);
                cropCenterImage($source_file, $output_file_thumb,$thumb_width,$thumb_height);
                cropCenterImage($source_file, $output_file_small,$small_width,$small_height);

            }else{

                resize_image($source_file, $output_file_large,$large_width,$large_height);
                resize_image($source_file, $output_file_square,$square_width,$square_height);
                resize_image($source_file, $output_file_thumb,$thumb_width,$thumb_height);
                resize_image($source_file, $output_file_small,$small_width,$small_height);

            }
        }else{
            if($image_resize ==2){

                cropCenterImage($source_file, $output_file_large,$large_height,$large_width);
                cropCenterImage($source_file, $output_file_square,$square_height,$square_width);
                cropCenterImage($source_file, $output_file_thumb,$thumb_height,$thumb_width);
                cropCenterImage($source_file, $output_file_small,$small_height,$small_width);

            }else{

                resize_image($source_file, $output_file_large,$large_height,$large_width);
                resize_image($source_file, $output_file_square,$square_height,$square_width);
                resize_image($source_file, $output_file_thumb,$thumb_height,$thumb_width);
                resize_image($source_file, $output_file_small,$small_height,$small_width);

            }
        }


		//echo $file_ext;
		if($water_mark ==1 && $file_ext==".jpg" ){
		$relative_path=RELATIVE_PATH.$output_file_large;
		//load image

		$im = imagecreatefromjpeg($relative_path);
		
		//figure out where to put the text
		$imagesize = getimagesize($relative_path);
		$x_offset = 50;
		$y_offset = $imagesize[1] -100;
		//allocate text color
		$textcolor = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
		//write out the watermark
		$largeimage=imagestring($im,2, $x_offset, $y_offset,WATER_MARK, $textcolor);
		imagejpeg($im,$relative_path,100);
		
		//list($width, $height) = getimagesize($output_file_large);
		}
		

		$image_large_path ='/uploads/shop/'.$agent_uid.'/products/large/'.$fileUp;

		$image_square_path ='/uploads/shop/'.$agent_uid.'/products/square/'.$fileUp;

		$image_thumb_path ='/uploads/shop/'.$agent_uid.'/products/thumb/'.$fileUp;

		$image_small_path ='/uploads/shop/'.$agent_uid.'/products/small/'.$fileUp;

		$delete_path ='uploads/shop/'.$agent_uid.'/products/'.$product_id;

	

		if ($result->num_rows() > 0){

		$array=array('agent_uid'=>$agent_uid,'product_id'=>$product_id,'image_name'=>$fileUp,'delete_path'=>$delete_path,'image_large_path'=>$image_large_path,'image_square_path'=>$image_square_path,'image_thumb_path'=>$image_thumb_path,'image_small_path'=>$image_small_path);

		}else{

		$array=array('agent_uid'=>$agent_uid,'product_id'=>$product_id,'image_name'=>$fileUp,'delete_path'=>$delete_path,'image_large_path'=>$image_large_path,'image_square_path'=>$image_square_path,'image_thumb_path'=>$image_thumb_path,'image_small_path'=>$image_small_path,'show_default'=>1);

		}

		$this->db->set($array);

		$this->db->insert('listing_product_image');

		$this->session->set_flashdata('success_msg',$this->lang->line('insert_pic'));	

	 }
}
	

	
	function teamupload()
	{
			$agent_uid=$this->uri->segment(3,0);
			$team_uid=$this->uri->segment(4,0);
				// IMAGE UPLOAD
			$up_filename = $_FILES['fileToUpload']['name']; 
			$temporary_name = $_FILES['fileToUpload']['tmp_name']; 
			$mimetype = $_FILES['fileToUpload']['type']; 
			$filesize = $_FILES['fileToUpload']['size']; 
			$output_file_path = 'uploads/shop/'.$agent_uid.'/team/'.$team_uid;
			
			$file_name = $this->prep_filename($up_filename);
  			$file_ext = $this->get_extension($up_filename);
	  		$fileUp = $this->set_filename($output_file_path, $file_name, $file_ext);

			
			$source_file =$temporary_name;
			$output_file_large = 'uploads/shop/'.$agent_uid.'/team/'.$team_uid.'/'.$fileUp;
			//exit();	
			resize_image($source_file, $output_file_large, 500,333);
			$output_file_large = 'uploads/shop/'.$agent_uid.'/team/'.$team_uid.'/'.$fileUp;
			
			list($width, $height) = getimagesize($output_file_large);
			if($width < 248 || $height < 332){
			if (file_exists('uploads/shop/'.$agent_uid.'/team/'.$team_uid.'/'.$fileUp)){
			unlink('uploads/shop/'.$agent_uid.'/team/'.$team_uid.'/'.$fileUp);
			}
			$msg="The image size must be at least 248 * 332, "." but it was ". $width." * ".$height;		
			$this->session->set_flashdata('success_msg',$msg);	
			
			}else{		
			
			$this->db->where('team_uid',$team_uid);
			$result=$this->db->get('team_details');
			$rows=$result->result();
			
			if($rows[0]->team_photo){
			
			$delete_pic = 'uploads/shop/'.$agent_uid.'/team/'.$team_uid.'/'.$rows[0]->team_photo;
			$delete_pic_crop = 'uploads/shop/'.$agent_uid.'/team/'.$team_uid.'/crop/'.$rows[0]->team_photo;
			if(file_exists($delete_pic))
			{
			unlink($delete_pic);
			$array=array('team_photo'=>$fileUp);
			}
			if(file_exists($delete_pic_crop))
			{
			unlink($delete_pic_crop);
			$this->db->where('team_uid',$team_uid);
			$this->db->delete('team_photo_position');
			}
			}
			
	
			$photo_path =DOMAIN_IMAGE_PATH.'uploads/shop/'.$agent_uid.'/team/'.$team_uid.'/'.$fileUp;
			$photo_path_crop =DOMAIN_IMAGE_PATH.'uploads/shop/'.$agent_uid.'/team/'.$team_uid.'/crop/'.$fileUp;
			
			
			$array=array('team_photo'=>$fileUp,'team_photo_path'=>$photo_path,'team_photo_path_crop'=>$photo_path_crop);
			$this->db->set($array);
			$this->db->where('team_uid',$team_uid);
			$this->db->update('team_details');
					
	
			$source =RELATIVE_PATH.'uploads/shop/'.$agent_uid.'/team/'.$team_uid.'/'.$fileUp;
			$save = 'uploads/shop/'.$agent_uid.'/team/'.$team_uid.'/crop/'.$fileUp;
			
			$startX=0; 
			$startY=0; 
			$cropWidth=248; 
			$cropHeight=332;
			crop_image($source,$save,$startX, $startY, $cropWidth, $cropHeight);	
			
			$data=array("team_uid"=>$team_uid,"x"=>0,"y"=>0,"w"=>248,"h"=>332);
			$this->db->where('team_uid',$team_uid);
			$result=$this->db->get('team_photo_position');
			if ($result->num_rows() > 0){
			$this->db->update('team_photo_position',$data);
			}else{
			$this->db->insert('team_photo_position',$data);
			}
			
			
			$this->session->set_flashdata('success_msg',$this->lang->line('insert_pic'));	
			$msg =$this->lang->line('insert_pic');	
		
			
			}

	
	}

	function uploadLayoutImagex()
    {
        //return(array($fileUp="1",$output_file="2"));
       // exit();
        $settings_layout_id=$this->input->post('settings_layout_id');
        $up_filename = $_FILES['image_name']['name'];
        $source_file = $_FILES['image_name']['tmp_name'];
        $mimetype = $_FILES['image_name']['type'];
        $filesize = $_FILES['image_name']['size'];
        $output_file_path = 'uploads/files/layouts/';

            if($up_filename && $settings_layout_id ){
                $rows=$this->db->select('layout_image')->where('settings_layout_id',$settings_layout_id)->from('settings_layout')->get()->result();
                if (file_exists(RELATIVE_PATH.'/'.$rows[0]->layout_image))
                {
                    unlink(RELATIVE_PATH.'/'.$rows[0]->layout_image);
                }
            }

            if(file_exists($source_file) && is_file($source_file)){

                $file_name = $this->prep_filename($up_filename);
                $file_ext = $this->get_extension($up_filename);
                $fileUp = $this->set_filename($output_file_path, $file_name, $file_ext);

                $output_file='uploads/files/layouts/'.$fileUp;
                resize_image($source_file, $output_file, 100,100);

            }else if($settings_layout_id >0 && !file_exists($source_file) ){

                $rows=$this->db->select('image_name,layout_image')->where('settings_layout_id',$settings_layout_id)->from('settings_layout')->get()->result();
                $fileUp =   isset($rows[0]->image_name) ? $rows[0]->image_name:'';
                $output_file = $rows[0]->layout_image ? $rows[0]->layout_image:'';

            }else{

                $fileUp='';
                $output_file='';
            }

        $array=array('layout_name'=>trim($_POST['layout_name']),'layout_type'=>$_POST['layout_type'],'column_no'=>$_POST['column_no'],'layout_divide'=>$_POST['layout_divide'],'image_name'=>$fileUp,'layout_image'=>$outputFile,'status' =>$_POST['status']);
        $this->db->set($array);
        if($settings_layout_id > 0){
            $this->db->where('settings_layout_id',$settings_layout_id);
            $this->db->update('settings_layout');
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
            redirect('settings/layouts/layouts_edit/'. $settings_layout_id);

        }else{

            $this->db->insert('settings_layout');
            $this->session->set_flashdata('success_msg',$this->lang->line('insert_msg'));
            redirect('settings/layouts');
        }



    }
	
	

	function create_dir_new($agent_uid, $dir=""){



		$assets_dir = './uploads/shop/';

		if(!file_exists($assets_dir.$agent_uid)){

			if(mkdir($assets_dir.$agent_uid, 0777)){
			}else{
			return false;
			}

		}

		$path = $agent_uid.'/'.$dir;

		if(!file_exists($assets_dir.$path)){

			if(mkdir($assets_dir.$path, 0777)){

				return $path;

			}else{

				return false;

			}

		}

		return $path = $agent_uid.'/'.$dir;

	}



	

	function set_filename($path, $old_filename, $file_ext, $encrypt_name = TRUE)

	{

		$filename=strtolower(url_title($old_filename,TRUE));

		

		if ($encrypt_name == TRUE)

		{		

			mt_srand();

			$filename = md5(uniqid(mt_rand())).$file_ext;	

		}

	

		if ( ! file_exists($path.$filename))

		{

			return $filename;

		}

	

		$filename = str_replace($file_ext, '', $filename);

		

		$new_filename = '';

		for ($i = 1; $i < 100; $i++)

		{			

			if ( ! file_exists($path.$filename.$i.$file_ext))

			{

				$new_filename = $filename.$i.$file_ext;

				break;

			}

		}



		if ($new_filename == '')

		{

			return FALSE;

		}

		else

		{

			return $new_filename;

		}

	}

	

	function prep_filename($filename){

	   if(strpos($filename, '.') === FALSE){

		  return $filename;

	   }

	   $parts = explode('.', $filename);

	   $ext = array_pop($parts);

	   $filename = array_shift($parts);

	   foreach ($parts as $part){

		  $filename .= '.'.$part;

	   }

	   $filename .= '.'.$ext;

	   return $filename;

	}

	

	function get_extension($filename)

	{

	   $x = explode('.', $filename);

	   return '.'.end($x);

	}
    function createProductDir($agent_uid, $dir=""){



        $assets_dir = './uploads/shop/';

        if(!file_exists($assets_dir.$agent_uid)){

            if(mkdir($assets_dir.$agent_uid, 0777)){
            }else{
                return false;
            }

        }

        $path = $agent_uid.'/'.$dir;

        if(!file_exists($assets_dir.$path)){

            if(mkdir($assets_dir.$path, 0777)){

                return $path;

            }else{

                return false;

            }

        }

        return $path = $agent_uid.'/'.$dir;

    }
	function removeDir($dir)
	{
		if(is_dir($dir))
		{
			$dir = (substr($dir, -1) != "/")? $dir."/":$dir;
			$openDir = opendir($dir);
			while($file = readdir($openDir))
			{
				if(!in_array($file, array(".", "..")))
				{
					if(!is_dir($dir.$file))
						@unlink($dir.$file);
					else
						$this->remove_dir($dir.$file);
				}
			}
			closedir($openDir);
			@rmdir($dir);
		}
		
  }
  
  function recursive_remove_directory($directory, $empty=FALSE)
  {
	// if the path has a slash at the end we remove it here
	if(substr($directory,-1) == '/')
	{
		$directory = substr($directory,0,-1);
	}

	// if the path is not valid or is not a directory ...
	if(!file_exists($directory) || !is_dir($directory))
	{
		// ... we return false and exit the function
		return FALSE;

	// ... if the path is not readable
	}elseif(!is_readable($directory))
	{
		// ... we return false and exit the function
		return FALSE;

	// ... else if the path is readable
	}else{

		// we open the directory
		$handle = opendir($directory);

		// and scan through the items inside
		while (FALSE !== ($item = readdir($handle)))
		{
			// if the filepointer is not the current directory
			// or the parent directory
			if($item != '.' && $item != '..')
			{
				// we build the new path to delete
				$path = $directory.'/'.$item;

				// if the new path is a directory
				if(is_dir($path)) 
				{
					// we call this function with the new path
					$this->recursive_remove_directory($path);

				// if the new path is a file
				}else{
					// we remove the file
					unlink($path);
				}
			}
		}
		// close the directory
		closedir($handle);

		// if the option to empty is not set to true
		if($empty == FALSE)
		{
			// try to delete the now empty directory
			if(!rmdir($directory))
			{
				// return false if not possible
				return FALSE;
			}
		}
		// return success
		return TRUE;
		}
	}
	


	

}