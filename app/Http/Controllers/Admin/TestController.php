<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use App\Member;
class TestController extends Controller
{
    //
    public function test1(){
    	return view('test');
    }
    public function test2(){
    	// dd(Input::get('name','qwertwq'));
    	dump(Input::only('name','id'));
    }

    public function add(){
    	// dd(Input::get('name','qwertwq'));
    	$res = DB::table('member')->insert(['name'=>'lvjianjun','age'=>24,'email'=>'wafedsa']);
        $res = DB::table('member')->insertGetId(['name'=>'lvjianjun','age'=>24,'email'=>'wafedsa']);
        dump($res);
        $res1 = Member::insert(['name'=>'lvjianjun','age'=>24,'email'=>'wafedsa']);
        $res1 = Member::insertGetId(['name'=>'lvjianjun','age'=>24,'email'=>'wafedsa']);
        dump($res1);
     // $mem = new Member();
     // $res = $mem->get();
     // dump($res);
    }

    public function del(){
    	// dd(Input::get('name','qwertwq'));
    	dump(DB::table('member')->where('id','<','2')->delete());
    }

    public function mod(){
    	// dd(Input::get('name','qwertwq'));
    	$res1= Member::where('name','zxq')->update(['name'=>'zxq001']);
        $res2 = DB::table('member')->where('id',4)->update(['name'=>'yanbaoduio']);
        dump($re2);

    }

    public function select(){
    	// dd(Input::get('name','qwertwq'));
        //select * from member  limit 1,2
        //  select name,age from member where id>2 order by id;
        dump(Member::limit(2)->offset(1)->get());
        die;
          dump(DB::table('member')->limit(2)->offset(1)->get());
          die;
        dump(DB::table('member')->where('id','>',2)->orderBy('id','desc')->select('name','age','id')->get());
        die;
        dump(DB::table('member')->where('id',3)->value('email'));
        die;
        dump(Member::find(5)); 
    	dump(DB::table('member')->find(3));
        die;

        $res1 = Member::all();
        //$res1 = DB::table('member')->all();
        dump($res1);
        $res2 = Member::get();
        $res2 = DB::table('member')->get();
        foreach ($res2 as $key => $v) {
            echo $v->name.'<br/>';
        }
        die;
        dump($res2);
    }
}
