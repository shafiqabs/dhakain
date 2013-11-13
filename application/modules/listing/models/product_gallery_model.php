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
class Product_gallery_model extends CI_Model
{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    /*----------------List of selected product category--------------*/
    public function productGalleryImage($agent_uid , $product_id)
    {
        return $this->db->select('product_gallery_id,image_large_path')->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id))->get('listing_product_gallery');
    }

    public function uploadImage($access_slug,$slug)
    {
        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        $productInfo=$this->product_model->productInformation(array('product_id'),$agent_uid , $slug);
        $product_id= $productInfo[0]->product_id;
        // HTTP headers for no cache etc
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

// Settings
        $targetDir =RELATIVE_PATH.'/uploads/shop/'.$agent_uid.'/'.$product_id.'/gallery/';
//$targetDir = 'uploads';

        $cleanupTargetDir = true; // Remove old files
        $maxFileAge = 5 * 3600; // Temp file age in seconds

// 5 minutes execution time
        @set_time_limit(5 * 60);

// Uncomment this one to fake upload time
// usleep(5000);

// Get parameters
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
        $fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : '';

// Clean the fileName for security reasons
        $fileName = preg_replace('/[^\w\._]+/', '_', $fileName);

// Make sure the fileName is unique but only if chunking is disabled
        if ($chunks < 2 && file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName)) {
            $ext = strrpos($fileName, '.');
            $fileName_a = substr($fileName, 0, $ext);
            $fileName_b = substr($fileName, $ext);

            $count = 1;
            while (file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName_a . '_' . $count . $fileName_b))
                $count++;

            $fileName = $fileName_a . '_' . $count . $fileName_b;
        }

        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

// Create target dir
        if (!file_exists($targetDir))
            @mkdir($targetDir);

// Remove old temp files
        if ($cleanupTargetDir && is_dir($targetDir) && ($dir = opendir($targetDir))) {
            while (($file = readdir($dir)) !== false) {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

                // Remove temp file if it is older than the max age and is not the current file
                if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge) && ($tmpfilePath != "{$filePath}.part")) {
                    @unlink($tmpfilePath);
                }
            }

            closedir($dir);
        } else
            die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');


// Look for the content type header
        if (isset($_SERVER["HTTP_CONTENT_TYPE"]))
            $contentType = $_SERVER["HTTP_CONTENT_TYPE"];

        if (isset($_SERVER["CONTENT_TYPE"]))
            $contentType = $_SERVER["CONTENT_TYPE"];

// Handle non multipart uploads older WebKit versions didn't support multipart in HTML5
        if (strpos($contentType, "multipart") !== false) {
            if (isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
                // Open temp file
                $out = fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
                if ($out) {
                    // Read binary input stream and append it to temp file
                    $in = fopen($_FILES['file']['tmp_name'], "rb");

                    if ($in) {
                        while ($buff = fread($in, 4096))
                            fwrite($out, $buff);
                    } else
                        die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
                    fclose($in);
                    fclose($out);
                    @unlink($_FILES['file']['tmp_name']);
                } else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
            } else
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
        } else {
            // Open temp file
            $out = fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
            if ($out) {
                // Read binary input stream and append it to temp file
                $in = fopen("php://input", "rb");

                if ($in) {
                    while ($buff = fread($in, 4096))
                        fwrite($out, $buff);
                } else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');

                fclose($in);
                fclose($out);
            } else
                die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }

// Check if file has been uploaded
        if (!$chunks || $chunk == $chunks - 1) {
            // Strip the temp .part suffix off
            rename("{$filePath}.part", $filePath);
        }


// Return JSON-RPC response
        die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');

    }

    public function saveGallery($access_slug,$slug,$data)
    {


        $agent_uid = $this->global_model->getUserID($field_name='access_slug',$access_slug);
        $productInfo=$this->product_model->productInformation(array('product_id'),$agent_uid , $slug);
        $product_id= $productInfo[0]->product_id;
        
        foreach ($data as $key => $value) {

            if(strpos($key,'tmpname')){

                $image="uploads/shop/".$agent_uid.'/'.$product_id.'/gallery/'.nl2br(htmlentities(stripslashes($value)));
                $this->db->set(array('agent_uid'=>$agent_uid,'product_id'=>$product_id,'image_large_path'=>$image))->insert('listing_product_gallery');

            }

        }

    }

    private function returnTemplate($id){

        $id_serialize = '"'.$id.'"';
        $SQL = sprintf("SELECT * FROM settings_image_size
        WHERE category_id LIKE  '%s%s%s'", '%',$id_serialize, '%' );
        $query=$this->db->query($SQL);
        if($query ->num_rows() > 0){
            return  $query;
        }
        return false;
        //print_r($category);
}




    public function galleryDelete($agent_uid,$product_id){

        $this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id));
        $this->db->delete('listing_product_gallery');
        $targetDir ='uploads/shop/'.$agent_uid.'/'.$product_id.'/gallery';
        $this->removeDir($targetDir);
        //$this->createProductDir($targetDir);
    }
    public function gallerySingleDelete($agent_uid,$product_id,$product_gallery_id){

        $this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id,'product_gallery_id'=>$product_gallery_id));
        $res = $this->db->get('listing_product_gallery');
        if($res ->num_rows() > 0 ) {
            $rows = $res->row();
            echo $delete_pic =RELATIVE_PATH.$rows->image_large_path;
            if (file_exists($delete_pic))
            {
                unlink($delete_pic);
            }
        }
        $this->db->where(array('agent_uid'=>$agent_uid,'product_id'=>$product_id,'product_gallery_id'=>$product_gallery_id));
        $this->db->delete('listing_product_gallery');
    }


    private function removeDir($dir)
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


}
