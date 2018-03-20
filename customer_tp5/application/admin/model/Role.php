<?php
namespace app\admin\model;

use think\Model;

class Role extends Model{
    protected $table = 'cmt_role';
    /**
     * @param string|array $data 查询条件
     * @param int $num          辨别是(1)查单条数据还是(0)多条
     * @param string $order    排序的
     * @return array|false|\PDOStatement|string|\think\Collection|Model
     */
    public function getRoleByData($data,$num = 0,$order = 'role_id'){
        if($num === 1){
            return $this->db()->where($data)->find();
        }else{
            return $this->db()->where($data)->order($order)->select();
        }
    }
}