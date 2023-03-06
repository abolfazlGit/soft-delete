<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
   
    use SoftDeletes;
    protected $dates= ['daleted_at']#<!!  در دیتابیس ذخیره کردیم  softdelete  اسم ستونی که به عنوان   !!>;

}
