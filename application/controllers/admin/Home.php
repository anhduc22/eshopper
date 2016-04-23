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
     * Index function
     *
     * Kiểm tra sự tồn tại của session. Nếu session bằng rỗng thì đẩy người dùng về trang login.
     * Load view home/index để hiện thị trang chủ của admin.
     */
    public function index() {
        if($this->session->userdata('ss_user') == '') {
            redirect(base_url('admin/login'));
        }
        $data['template']   = 'admin/home/dashboard';
        $this->load->view('admin/layout/master', isset($data) ? $data : null);
    }

    public function ip()
    {
        $ipaddress = '';
        if($_SERVER['REMOTE_ADDR'])
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        echo $ipaddress ;
        echo '<hr />';
        echo $this->input->ip_address();
        echo '<hr />';
        echo $this->input->user_agent();
    }

    public function test() {
        echo 'abcd';
    }


}
