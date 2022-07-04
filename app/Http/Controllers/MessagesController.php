<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;

class MessagesController extends Controller
{
    public function store(Request $request,$id){
        $request->user()->messages()->create([
            'message'=>$request->message,
            ]);
            
        return back();
    }
    
    public function messageboard($id){
        $user=\Auth::user();
        $messages=$user->messages()->orderBy('id','desc')->paginate(10);
        return view('messages.messageboard',[
            'user'=>$user,
            'messages'=>$messages,
            ]);
    }
}
