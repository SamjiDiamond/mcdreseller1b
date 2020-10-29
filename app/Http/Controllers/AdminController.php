<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $datas['buys']=DB::table("buy")->orderBy('id','desc')->limit(5)->get();
        $datas['tbuys']=DB::table("buy")->count();
        $datas['tdbuys']=DB::table("buy")->where('date', 'LIKE', Carbon::now()->toDateString().'%' )->count();
        $datas['tdattempts']=DB::table("request")->where('date', 'LIKE', Carbon::now()->toDateString().'%' )->count();
        return view('admin.dashboard', $datas);
    }

    public function transactions(){
        $datas['buys']=DB::table("buy")->orderBy('id','desc')->paginate(20);
        return view('admin.transactions', $datas);
    }

    public function products(){
        $datas['data']=DB::table("products")->paginate(10);
        return view('admin.products', $datas);
    }


    public function editproduct($id){
        $datas['data']=DB::table("products")->find($id);
        return view('admin.editproduct', $datas);
    }

    public function etproduct(Request $request){
        $p=DB::table("products")->where('id',$request->id)->update(['name'=>$request->name, 'amount'=>$request->amount, 'status'=>$request->status]);

        return redirect('/products')->with('success', 'Product details changed successfully');
    }

    public function attempts(){
        $datas['buys']=DB::table("request")->paginate(10);
        return view('admin.attempts', $datas);
    }

    public function buydatalist($network){
        $data=DB::table("products")->where("logo", $network."_logo.png")->get();
        return response()->json(['success'=>1, 'data'=>$data]);
    }
}
