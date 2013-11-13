<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function pdf_create($html, $filename='', $stream=TRUE)
{
    require_once("dompdf/dompdf_config.inc.php");

    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    if ($stream) {
        //var_dump($dompdf);
        $dompdf->stream($filename.".pdf");

        // die;

    } else {
        return $dompdf->output();
    }
}
?>