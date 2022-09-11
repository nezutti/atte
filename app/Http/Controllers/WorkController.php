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
        $is_attendance_start=$item->startのデータが存在するとき
        $is_attendance_end=$item->
        $is_rest_start=
        $is_rest_end=
        return view('stamp',['item'=>$item]);
    }

    public function add(){
        $date=Carbon::now();
        Work::create(['start_at'=>$date]);
       
        return redirect('/');
        
        
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
