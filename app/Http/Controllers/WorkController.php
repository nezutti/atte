<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Rest;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;

class WorkController extends Controller
{
    public function index(){
        $item=Work::with('rests')->latest()->first();
        $is_attendance_start=Work::whereDate('created_at',Carbon::today())->exists();
        $is_rest_end=Rest::where('start_at',Carbon::today())->where('end_at','')->exists();
        $items=['item'=>$item,'is_attendance_start'=> $is_attendance_start,'is_rest_end'=>$is_rest_end];
        return view('stamp',$items);
    }

    public function add(){
        $date=Carbon::now();
        Work::create(['start_at'=>$date,'']);
       
        return redirect('/');
        
    }

    public function update(Request $request){
        $time=Carbon::now();
        Work::update(['end_at'=>$date,]);
        return redirect('/');
    }

    public function addRest(Request $request){
        $date=Carbon::now();
        $work_id=$request->work_id;
        Rest::create(['start_at'=>$date,'work_id'=>$work_id]);
        
        return redirect('/');

    }

    public function updateRest(Request $request){
        $date=Carbon::now();
        $work_id=$request->work_id;
        Rest::update(['end_at'=>$date,'work_id'=>$work_id]); //挿入するレコードは全て記入しなけれなならない//
        return view('stamp');
    }

    public function date(){
           
           $items=Work::with('rests')->where('created_at',$date)->get();
           $items2=$item->rests;
           $total_rest=0;
           foreach($item2 as $items2){
            $total_rest+=$item2->end_at-$item2->start_at;
           }

}         

        //表示するページの分岐
    }
   

