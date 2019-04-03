<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/4 0004
 * Time: 00:47
 */

namespace app\index\model;

use think\Model;
use traits\model\SoftDelete;

class Grade extends Model
{
    use SoftDelete;
    public function add_grade($data){
        $ret = $this->allowField(true)->save($data);
        if(!empty($ret)){
            return 1;
        }else{
            return 0;
        }
    }
}