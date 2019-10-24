<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //纠正模型要操作的数据表 
    protected  $table = 'member';
    //主键字段 不是id 的时候需要制定主键
    protected $primaryKey = 'id';
    //时间戳 禁用时间戳的自动转化 如果不定义数据表会自动更新记录 created_time  updated_time  而且限制类型 年月日 时分秒的格式
    public $timestamps = false;
}
