<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/4 0004
 * Time: 00:46
 */

namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;

class Student extends Model
{
    use SoftDelete;
    protected $insert = ['create_time','status'=>1,'update_time'];
    protected $update = ['update_time'];
    protected function setCreateTimeAttr(){
        return time();
    }
    protected function setUpdateTimeAttr(){
        return time();
    }
    public function add_student($data){
        if($this->allowField(true)->save($data)){
            return 1;
        }else{
            return 0;
        }
    }
}