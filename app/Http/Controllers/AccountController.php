<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Hash;

class AccountController extends Controller
{
    public function storeUser(Request $request) {
        $rules = [
            'username' => 'required|unique:users,email',
            'first_name' => 'required',
            'password' => 'required|min:8|same:password2'
        ];
        $messages = [
            'password.same' => 'Yo dawg,password are not cool man!',
            'first_name.required' => 'Yo dawg, need some name man!!!',
        ];
        
        $request->validate($rules, $messages);
       // everything is cool
       $userData = [
           'email' => $request->get('username'),
           'password' => Hash::make($request->get('password')),
           'name' => $request->get('first_name'),
           'surename' => $request->get('last_name'),
       ];
       DB::table('users')->insert($userData);
       Session::flash('success', 'yay, you are cool dawg!');
       return redirect()->back();
    }
    public function saveChatMessage(Request $request){
    $messageData = [
        'username' => $request->get('username'),
        'text' => $request->get('text'),
        'created_at' => date('Y-m-d H'),
        'updated_at' => date('Y-m-d H'),

    ];
    // DB::table('')
    DB::table('messages')->insert($messageData);
    return ['status' => 'ok'];
   }

   public function getChatMessages() {
       return DB::table('messages')->get();
   
    }
}