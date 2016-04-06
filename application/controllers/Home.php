<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH."controllers/MY_Controller.php");

class Home extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    // --------------------------------------------------------------------

    /**
     * Index Function.
     *
     * @Author Anh Duc
     * @Date 06/04/2016
     * @Time 09:08 AM
     * @description Hiển thị trang chủ front-end.
     */
    public function index() {
        $data['template']   = 'site/home/index';
        $this->load->view('site/layout/master', isset($data) ? $data : null);
    }
}
