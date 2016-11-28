<?php

namespace App\Http\Controllers;

use App\Note;

class PagesController extends Controller {

	public function __construct() {
        // only authenticated users can access these page of the controller
        $this->middleware('auth');
    }
	
	// Home page
	public function index() {
		$notes = Note::all(); // stores all of the notes

        return view('Pages.home')->with('all_notes',$notes);
		
	}

	// About page
	public function about() {
		return "About";
	}

	// Contact page
	public function contact() {
		return "Contact"; 
	}
}