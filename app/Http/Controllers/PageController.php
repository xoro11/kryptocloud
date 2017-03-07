<?php

namespace App\Http\Controllers;
use App\Post;

class PageController extends Controller {
	public function getFirstpage(){
		$posts=Post::orderBy('created_at','desc')->limit(4)->get();

		return view('pages.firstpage')->withPosts($posts);

	}
	public function getEntext(){
		return view('pages.entext');

	}


	public function getAbout(){

		return view('pages.out');

	}
	public function getContact(){

		return view('pages.contact');

	}

}
