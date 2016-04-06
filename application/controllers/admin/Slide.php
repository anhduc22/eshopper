<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH."controllers/MY_Controller.php");

class Slide extends MY_Controller {

    public function __construct() {

        parent::__construct();
        // Load model m_slide
        $this->load->model(array('m_slide'));
        // Load thư viện phân trang.
        $this->load->library('pagination');
    }

    /**
     * Show function.
     *
     * @param $page.
     * @description Hiển thị bảng danh sách slide. Cấu hình phân trang cho danh sách.
     */
    public function show($page = 1) {

        // Cấu hình phân trang
        $config['base_url'] = base_url('admin/show-slide'); // Đường dẫn phân trang
        $total = $config['total_rows'] = $this->m_slide->countItems(); // Tổng số bản ghi
        $per_page = $config['per_page'] = 2; // Số bản ghi trên 1 trang
        $config['uri_segment'] = 2; // vị trí segment của page
        $config['num_links'] = 2; // Số page hiển thị phân trang
        $config['use_page_numbers'] = FALSE; // Sử dụng phân trang định dạng là số

        // HTML bao quanh phân trang
        $config['full_tag_open'] = '<ul class="btn-group">';
        $config['full_tag_close'] = '<ul>';

        // HTML của trang đầu
        $config['first_link'] = 'Trang đầu';
        $config['first_tag_open'] = '<li class="btn btn-info phantrang" type="button">';
        $config['first_tag_close'] = '</li>';

        // HTML của trang cuối
        $config['last_link'] = 'Trang cuối';
        $config['last_tag_open'] = '<li class="btn btn-info phantrang" type="button">';
        $config['last_tag_close'] = '</li>';

        // HTML của trang tiếp theo
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="btn btn-info phantrang" type="button">';
        $config['next_tag_close'] = '</li>';

        // HTML của trang trước
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="btn btn-info phantrang" type="button">';
        $config['prev_tag_close'] = '</li>';

        // HTML của trang hiện tại
        $config['cur_tag_open'] = '<li class="btn btn-info phantrang active" type="button">';
        $config['cur_tag_close'] = '</a></li>';

        // HTML của trang bình thường
        $config['num_tag_open'] = '<li class="btn btn-info phantrang" type="button">';
        $config['num_tag_close'] = '</li>';


        // THỰC HIỆN PHÂN TRANG
        $this->pagination->initialize($config);

        // HIỂN THỊ PHÂN TRANG
        $data['pagination'] = $this->pagination->create_links();

        // VALIDATION BIẾN $page
        $page = ($page < 1) ? 1 : $page;
        $page = ($page > ceil($total/$per_page)) ? ceil($total/$per_page) : $page;


        
        $data['list'] = $this->m_slide->getAll('*',array('id >' => 0),$per_page, $per_page*($page-1));

        $data['module']     = 'slide';
        $data['action']     = 'show';
        $data['template']   = 'admin/slide/show';
        $this->load->view('admin/layout/master', isset($data) ? $data : null);
    }
}