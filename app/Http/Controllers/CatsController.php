<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;

class CatsController extends Controller
{
    public function index(){
        //ログインユーザーの投稿を取得し、welcomeに送る
        $data=[];
        
        if(\Auth::check()){
            $user=\Auth::user();
            
            $cats=$user->cats()->orderBy('id','desc')->paginate(10);
            
            $data=[
                'user'=>$user,
                'cats'=>$cats,
                ];
        }
        
        return view('welcome',$data);
    }
    
    public function create(){
        return view('cats.create');
    }
    
    public function store(Request $request){
        $request->user()->cats()->create([
            'name'=>$request->name,
            'age'=>$request->age,
            'content'=>$request->content,
            ]);
        return redirect('/');
    }
    
    public function destroy($id){
        $cat=Cat::findOrFail($id);
        
        if(\Auth::id() === $cat->user_id){
            $cat->delete();
        };
        return back();
    }
}
