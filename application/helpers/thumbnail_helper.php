<?php
include(APPPATH."/helpers/phpthumb/thumblib.inc.php");

function resize_image($source, $output, $width = 100, $height = 100){
	if(!@file_exists($source)){
		return false;
	}
	if (!@is_writable(dirname($output))) {
		return false;
	}
	
	$thumb = PhpThumbFactory::create($source);
	$thumb->adaptiveResize($width, $height);
	$thumb->save($output);
	
	if(!@file_exists($output)){
		return false;
	}
	return true;
}

function crop_image($source, $output, $x =0, $y =0 ,$width = 100, $height = 100){

	if(!@file_exists($source)){
		return false;
	}
	if (!@is_writable(dirname($output))) {
		return false;
	}

	$thumb = PhpThumbFactory::create($source);
	$thumb->crop($x , $y , $width , $height);
	$thumb->save($output);
	
	if(!@file_exists($output)){
		return false;
	}
	return true;
}
function cropCenterImage($source, $output,$width = 100, $height = 100){

    if(!@file_exists($source)){
        return false;
    }
    if (!@is_writable(dirname($output))) {
        return false;
    }
	$thumb = PhpThumbFactory::create($source);
	$thumb->cropFromCenter($width , $height);
	$thumb->save($output);
	if(!@file_exists($output)){
        return false;
    }
	return true;
}