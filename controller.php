<?php

namespace App\Http\Controllers;

use App\Models\posts;

use App\Http\Requests\StorepostsRequest;
use App\Http\Requests\UpdatepostsRequest;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //انجام میشود softdelete  مدل ها استفاده میکنیم به صورت خودکار عمل  delete زمانی که از حالت  
 public function  sofd_delete(){
Posts::where('id' , 2)->delete();
 }

 public function select(){
    //باعث میشود که بتوانیم  زمانی که آیتمی حذف شده باشد را پیمایش کنیم onlyTrashed 
    $posts = Posts::onlyTrashed()->get();
    
 }


 public function rolback(){
    // شده اند را از آن حالت خارج کنند  delete  باعث میشود تا بتوانیم تمام آیتم هایی که  restore
    $posts = Posts::onlyTrashed()->restore();
    
 }


 public function delete(){
    //شده اند را به صورت فیزیکی و کامل پاک میکنند softdelete باعث میشود تا دیتا هایی که  forceDelete
    $posts = Posts::onlyTrashed()->forceDelete();
    
 }
}
