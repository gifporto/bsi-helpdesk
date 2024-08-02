<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

class Pdf extends Dompdf 
{
    private $_ci;

    private $pdf_filename = 'pdf_file.pdf';

    function __construct()
    {
        parent::__construct();
        //Do your magic here

        $this->_ci = &get_instance();
    }

    function set_filename($filename)
    {
        $this->pdf_filename = $filename .'.pdf';
    }

    function create_pdf($view, $data = array())
    {
        
        $html = $this->_ci->load->view($view, $data, TRUE);
        $this->load_html($html);
        $this->setPaper('A4', 'potrait');
        $this->render();
        //$this->output();
        //file_put_contents("file.pdf", $this->output());
        $this->stream($this->pdf_filename, array("Attachment" => false));
    }

    function write_pdf($view, $data = array())
    {
        
        $this->_ci->template->set_layout('layout_blank')
                     ->set_partial('modules_js','modules_js')
                     ->set_partial('modules_css','modules_css');
        $html = $this->_ci->template->build($view, $data);
        //$html = $this->_ci->load->view($view, $data, TRUE);
        return $this->load_html($html);

        //$this->render();
        //$this->stream($this->pdf_filename, array("Attachment" => false));
    }

    /*function generate_pdf($view, $data = array())
    {
        
        $html = $this->_ci->load->view($view, $data, TRUE);
        $this->load_html($html);
        $this->setPaper('A4', 'portrait');
        $this->setIsPhpEnabled(true);
        $this->setIsRemoteEnabled(true);
        $this->setIsJavascriptEnabled(true);
        $this->render();
        $this->stream($this->pdf_filename, array("Attachment" => false));
    }*/
}
