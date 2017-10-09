<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function getIndex(){
		return view('welcome');
	}
    public function getAbout(){
		$companyName = "GreatSchool Academy for Web Artists and Engineers";
    	return view('Pages.about')->with("comp_name", $companyName);
    }
    public function getContact(){
    	return view('Pages.contact');
    }
    public function getFAQ(){
    	return view('Pages.frequently-asked-questions');
    }
}
