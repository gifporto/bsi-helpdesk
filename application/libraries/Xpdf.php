<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Mpdf\Mpdf;

class Xpdf extends Mpdf
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
        //$all_html = $this->load->view('html_to_pdf',[],true); //CodeIgniter view file name
        $this->WriteHTML($html);
        $this->Output();    
    }

}
