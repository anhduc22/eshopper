<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public $table = 'user';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * CheckUser function. Truy vấn vào bảng user và đếm số bản ghi thỏa mãn điều kiện.
     * Nếu số bản ghi nhỏ hơn không thì trả về số bản ghi. Nếu số bản ghi lớn hơn không thì
     * trả về mảng giá trị.
     *
     * @param   string. User name do người dùng nhập vào.
     * @param   string. Password của người dùng.
     * @return  integer or array. số bản ghi hoặc mảng giá trị.
     */
    public function checkUser($user, $pass) {
        $query = $this->db->where(['username' => $user, 'password' => $pass])->get($this->table);
        $count = $query->num_rows();
        if($count > 0) {
            $data = $query->row_array();
            return $data;
        }
        else {
            return $count;
        }
    }
}