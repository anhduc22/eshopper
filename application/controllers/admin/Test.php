<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH."controllers/MY_Controller.php");

class Test extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    // --------------------------------------------------------------------

    public function index() {
        $this->load->view('admin/slide/index');
    }


}
