<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use APP\Models\Rest;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;

class WorkController extends Controller
{
    public function index(){
        $item=Work::latest()->first();
        $is_attendance_start=Work::whereDate('created_at',Carbon::today())->exists();
        $is_attendance_end=Work::where('start_at',Carbon::today())->where('end')
        $is_rest_start=Work::where('start_at',Carbon::today())-
        $is_rest_end=Rest::where('start_at',Carbon::today())->where('end_at','')->exists();
        $items=['item'=>$item,'is_attendance_start'=> $is_attendance_start,'is_attendance_end'=>$is_attendance_end,'is_rest_start'=> $is_rest_start',is_rest_end'=>$is_rest_end]
        return view('stamp',$items);
    }

    public function add(){
        $date=Carbon::now();
        Work::create(['start_at'=>$date]);
       
        return redirect('/');
        
        restが押されててendが押されてない状態
    }

    public function update(){
        $time=Carbon::now();
        Work::update(['end_at'=>$date]);
        return redirect('/');
    }

    public function addRest(){
        $date=Carbon::now();
        Rest::add(['start_at'=>$date]);
        
        return view('stamp');

    }

    public function updateRest(){
        $date=Carbon::now();
        Rest::add(['end_at'=>$date]);
        return view('stamp');
    }
}
