<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Languageswitcher extends MY_Controller
{
    public function __construct() {
        parent::__construct();
    }

    function switchLang($language = "") {

        $language = ($language != "") ? $language : "indonesia";
        $this->session->set_userdata('site_lang', $language);

        redirect($_SERVER['HTTP_REFERER']);
        // redirect('welcome/gallery');
    }
}
