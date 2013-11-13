<?php

/**
 * Seller  Model
 *
 * @package	
 * @subpackage	
 * @category	
 * @author	Md Shafiqul Islam
 * @link	
 */
class Product_image_model extends CI_Model
{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    /*----------------List of selected product category--------------*/

private function returnTemplate($id){

        $id_serialize = '"'.$id.'"';
        $SQL = sprintf("SELECT * FROM settings_image_size
        WHERE category_id LIKE  '%s%s%s'", '%',$id_serialize, '%' );
        $query=$this->db->query($SQL);
        if($query ->num_rows() > 0){
            return  $query;
        }
        return false;
        //print_r($query);
}


private function getImageSize($agent_uid,$product_id)
{

            $catID=$this->product_model->typeProduct($agent_uid , $product_id);
    //print_r($catID);
            if($this->returnTemplate($catID[0]->catid_label_4) != false ){
                return $imageSize= $this->returnTemplate($catID[0]->catid_label_4)->row_array();
            }elseif($this->returnTemplate($catID[0]->catid_label_3) != false ){
                return $imageSize= $this->returnTemplate($catID[0]->catid_label_3)->row_array();
            }elseif($this->returnTemplate($catID[0]->catid_label_2) != false ){
                return $imageSize= $this->returnTemplate($catID[0]->catid_label_2)->row_array();
            }elseif($this->returnTemplate($catID[0]->catid_label_1) != false ){
                return $imageSize= $this->returnTemplate($catID[0]->catid_label_1)->row_array();
            }else{
                return $imageSize=array('large_image_width' => 300, 'large_image_height' => 250, 'medium_image_width' => 300, 'medium_image_height' => 300, 'thumb_image_width' => 120 , 'thumb_image_height' => 120 , 'small_image_width' => 80 , 'small_image_height' => 80);
        
            }
}

public function saveImageUpload($access_slug,$slug){
{

            $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
            $productInfo=$this->product_model->productInformation(array('product_id'),$agent_uid , $slug);
            $product_id= $productInfo[0]->product_id;
            $count=$this->db->where('product_id',$product_id)->get('listing_product_image')->num_rows();

            if ($count > IMAGE_LIMIT ){
                $this->session->set_flashdata('success_msg','This image cannot be uploaded more then '.IMAGE_LIMIT);
                $msg ='This image cannot be uploaded more then '.IMAGE_LIMIT;

            }else{

                $imageSize=$this->getImageSize($agent_uid , $product_id);

                $large_width=$imageSize['large_image_width'];
                $large_height=$imageSize['large_image_height'];
                $medium_width=$imageSize['medium_image_width'];
                $medium_height=$imageSize['medium_image_height'];
                $thumb_width=$imageSize['thumb_image_width'];
                $thumb_height=$imageSize['thumb_image_height'];
                $small_width=$imageSize['small_image_width'];
                $small_height=$imageSize['small_image_height'];


                // IMAGE UPLOAD
                $up_filename = $_FILES['fileToUpload']['name'];
                $temporary_name = $_FILES['fileToUpload']['tmp_name'];

                if(!$count > 0){

                    $targetDir ='uploads/shop/'.$agent_uid.'/'.$product_id;
                    $this->createProductDir($targetDir);

                    $targetDir ='uploads/shop/'.$agent_uid.'/'.$product_id.'/products';
                    $this->createProductDir($targetDir);
                    $large ='uploads/shop/'.$agent_uid.'/'.$product_id.'/products/large';
                    $this->createProductDir($large);
                    $medium ='uploads/shop/'.$agent_uid.'/'.$product_id.'/products/medium';
                    $this->createProductDir($medium);
                    $thumb ='uploads/shop/'.$agent_uid.'/'.$product_id.'/products/thumb';
                    $this->createProductDir($thumb);
                    $small ='uploads/shop/'.$agent_uid.'/'.$product_id.'/products/small';
                    $this->createProductDir($small);

                }



                $output_file_path ='uploads/shop/'.$agent_uid.'/'.$product_id.'/products/large/';
                $file_name = $this->image_model->prep_filename($up_filename);

                $file_ext = $this->image_model->get_extension($up_filename);

                $fileUp = $this->image_model->set_filename($output_file_path, $file_name, $file_ext);

                $source_file =$temporary_name;


                $image_resize=$this->input->post('image_resize');
                $show_type=$this->input->post('show_type');
                $water_mark=$this->input->post('water_mark');


                $image_large_path = 'uploads/shop/'.$agent_uid.'/'.$product_id.'/products/large/'.$fileUp;
                $image_medium_path = 'uploads/shop/'.$agent_uid.'/'.$product_id.'/products/medium/'.$fileUp;
                $image_thumb_path = 'uploads/shop/'.$agent_uid.'/'.$product_id.'/products/small/'.$fileUp;
                $image_small_path = 'uploads/shop/'.$agent_uid.'/'.$product_id.'/products/thumb/'.$fileUp;

                if($show_type =='landscape'){

                    if($image_resize ==2){

                        cropCenterImage($source_file, $image_large_path,$large_width,$large_height);
                        cropCenterImage($source_file, $image_medium_path,$medium_width,$medium_height);
                        cropCenterImage($source_file, $image_thumb_path,$thumb_width,$thumb_height);
                        cropCenterImage($source_file, $image_small_path,$small_width,$small_height);

                    }else{

                        resize_image($source_file, $image_large_path,$large_width,$large_height);
                        resize_image($source_file, $image_medium_path,$medium_width,$medium_height);
                        resize_image($source_file, $image_thumb_path,$thumb_width,$thumb_height);
                        resize_image($source_file, $image_small_path,$small_width,$small_height);
                    }

                }else{

                    if($image_resize ==2){

                        cropCenterImage($source_file, $image_large_path,$large_height,$large_width);
                        cropCenterImage($source_file, $image_medium_path,$medium_height,$medium_width);
                        cropCenterImage($source_file, $image_thumb_path,$thumb_height,$thumb_width);
                        cropCenterImage($source_file, $image_small_path,$small_height,$small_width);

                    }else{

                        resize_image($source_file, $image_large_path,$large_height,$large_width);
                        resize_image($source_file, $image_medium_path,$medium_height,$medium_width);
                        resize_image($source_file, $image_thumb_path,$thumb_height,$thumb_width);
                        resize_image($source_file, $image_small_path,$small_height,$small_width);

                    }
                }

                if($water_mark ==1 && $file_ext==".jpg" ){

                    $relative_path=RELATIVE_PATH.$image_large_path;
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

                $delete_path ='uploads/shop/'.$agent_uid.'/'.$product_id.'/products';
                if ($count > 0){

                    $array=array('agent_uid'=>$agent_uid,'product_id'=>$product_id,'show_type'=>$show_type,'image_name'=>$fileUp,'delete_path'=>$delete_path,'image_large_path'=>$image_large_path,'image_medium_path'=>$image_medium_path,'image_thumb_path'=>$image_thumb_path,'image_small_path'=>$image_small_path);

                }else{

                    $array=array('agent_uid'=>$agent_uid,'product_id'=>$product_id,'show_type'=>$show_type,'image_name'=>$fileUp,'delete_path'=>$delete_path,'image_large_path'=>$image_large_path,'image_medium_path'=>$image_medium_path,'image_thumb_path'=>$image_thumb_path,'image_small_path'=>$image_small_path,'show_default'=>1);

                }

                $this->db->set($array);
                $this->db->insert('listing_product_image');
                $this->session->set_flashdata('success_msg',$this->lang->line('insert_pic'));

            }
        }

    }

    function deleteImage($access_slug,$slug,$image_id)
    {
        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        $productInfo=$this->product_model->productInformation(array('product_id'),$agent_uid , $slug);
        $product_id= $productInfo[0]->product_id;

        $this->db->select('image_name');
        $this->db->where(array('product_image_id'=>$image_id,'product_id'=>$product_id,'agent_uid'=>$agent_uid));
        $result=$this->db->get('listing_product_image');
        $rows=$result->result();

        $delete_pic =RELATIVE_PATH.'uploads/shop/'.$agent_uid.'/'.$product_id.'/products/large/'.$rows[0]->image_name;
        $delete_pic_medium =RELATIVE_PATH.'uploads/shop/'.$agent_uid.'/'.$product_id.'/products/medium/'.$rows[0]->image_name;
        $delete_pic_thumb =RELATIVE_PATH.'uploads/shop/'.$agent_uid.'/'.$product_id.'/products/thumb/'.$rows[0]->image_name;
        $delete_pic_small =RELATIVE_PATH.'uploads/shop/'.$agent_uid.'/'.$product_id.'/products/small/'.$rows[0]->image_name;
        if (file_exists($delete_pic))
        {
            unlink($delete_pic);
            unlink($delete_pic_medium);
            unlink($delete_pic_thumb);
            unlink($delete_pic_small);
        }

        $this->db->where(array('product_image_id'=>$image_id,'product_id'=>$product_id,'agent_uid'=>$agent_uid));
        $this->db->delete('listing_product_image');
    }

    private function createProductDir($dir=""){

        if(!file_exists($dir)){

            if(mkdir($dir, 0777)){
            }else{
                return false;
            }

        }


    }

}
