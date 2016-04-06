<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_slide extends CI_Model {

    public $table = 'slide';

    public function __construct()
    {
        parent::__construct();
    }

    // --------------------------------------------------------------------

    /**
     * GetAll function. Lấy tất cả bản ghi của bảng slide.
     *
     * @param $select. Là một chuỗi những trường mình muốn lấy.
     * @param $where. Là một mảng các điều kiện.
     * @param $perpage. Là số bản ghi muốn hiển thị trên một trang.
     * @param  $start. Là số bản ghi bắt đầu lấy.
     */
    public function getAll($select = '', $where = NULL, $perpage = '', $start = '') {
        // Nếu perpage và start bằng rỗng nghĩa là không có phân trang. Ta sẽ return về câu truy vấn lấy tất cả
        // bản ghi trong bảng slide.
        if($perpage == '' and $start == '') {
            return $this->db->select($select)->where($where)->order_by('id','DESC')->get($this->table)->result_array();
        }
        // Trường hợp ngược lại là có phân trang. Ta sẽ limit số bản ghi lấy theo perpage và start.
        else {
            return $this->db->select($select)->where($where)->order_by('id','DESC')->limit($perpage,$start)
                        ->get($this->table)->result_array();
        }
    }

    // --------------------------------------------------------------------

    /**
     * CountItems function.
     *
     * @param $where. Mảng điều kiện.
     * @description Đếm số bản ghi trong bảng slide theo điều kiện where truyền vào.
     */
    public function countItems($where = null) {
        if(isset($where) && count($where)) {
            return $this->db->where($where)->from($this->table)->count_all_results();
        }
         else {
             return $this->db->from($this->table)->count_all_results();
         }
    }
}