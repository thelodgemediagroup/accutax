<?php 
Class Seo extends CI_Controller {

    function sitemap()
    {
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view("sitemap");
    }
}
?>