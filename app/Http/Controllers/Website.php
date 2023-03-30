<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Website extends Controller
{
	public function index(){

		$data = ['name'=>"Venukishore","data"=>"Hello Venu"];
		$user['to'] = 'venuvk12345@gmail.com';

		Mail::send('mail',$data,function($messages) use ($user){
			$messages->to($user['to']);
			$messages->subject('You are Logined as a user');
		});
	}    
}
