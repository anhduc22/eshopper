<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH."controllers/MY_Controller.php");

class Auth extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model m_user để xử lý phần login của user
        $this->load->model(array('m_user'));
    }

    // --------------------------------------------------------------------

    /**
     * Login Function.
     *
     * Check thông tin, kiểm tra tính hợp lệ của thông tin nhập vào.
     * Load view auth/login để hiện thị trang đăng nhập.
     */
    public function login() {

        if($this->session->userdata('ss_user') != '') {
            redirect(base_url('admin'));
        }

        $data['error'] = '';

        if($this->input->post('submit')) {

            // Tạo luật và viết lại thông báo cho trường password.
            $this->form_validation->set_rules('password', 'Mật khẩu', 'min_length[6]|max_length[18]',
                array(
                    'min_length'     => '%s tối thiểu phải có 6 ký tự',
                    'max_length'     => '%s vượt quá số ký tự cho phép'
                )
            );

            if($this->form_validation->run() == TRUE) {
                // Lấy thông tin user name & password của user
                $user = $this->input->post('username');
                $pass = $this->input->post('password');
                $check = $this->m_user->checkUser($user, $pass);
                if($check == 0) {
                    $data['error'] = 'Sai tên tài khoản hoặc mật khẩu';
                } else {
                    $arrUser = array(
                        'ss_user'  => $check['username'],
                        'ss_id'    => $check['id']
                    );
                    $this->session->set_userdata($arrUser);
                    redirect(base_url('admin'));
                }
            }
        }
        $this->load->view('admin/auth/login', isset($data) ? $data : null);
    }

}
