<?php
namespace app\admin\model;

use think\Model;

class Rm extends Model{
    protected $table = 'cmt_rm';

    /**
     * @param $data
     * @param int $num
     * @param string $order
     * @return array|false|\PDOStatement|string|\think\Collection|Model
     */
    public function getRMByData($data,$num=0,$order='rm_id'){
        if($num ===1){
            return $this->db()->where($data)->find();
        }else{
            return $this->db()->where($data)->order($order)->select();
        }
    }
}