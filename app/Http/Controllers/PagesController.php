<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	public function home(){
	return view('/welcome',['title'=>'Home']);
	}	
	public function about(){
	return view('/about',['title'=>'About']);
	}	
	public function contact(){
	return view('/contact',['title'=>'Contact']);
	}
	public function artisans(){
	return view('/artisans',['title'=>'Artisans']);
	}
}
