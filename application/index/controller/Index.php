<?php
namespace app\index\controller;

use app\index\model\Grade as gradeModel;
use app\index\model\Student as studentModel;
class Index
{
    //新增班级
    /*public function add_grade(){
        $grade = new gradeModel();
        $data = [
            'name' => '一年级'
        ];
        if($grade->add_grade($data)){
            return '添加班级成功!';
        }else{
            return '添加班级失败!';
        }
    }*/
    //添加学生
    public function add_student(){
        $student = new studentModel();
        $data = [
            'name'  => '张三',
            'age'   => 12,
            'grade_id' => 1
        ];
        if(!empty($student->add_student($data))){
            return '新增学生成功！';
        }else{
            return '新增学生失败！';
        }
    }
    //查询
    public function search(){

    }
}
