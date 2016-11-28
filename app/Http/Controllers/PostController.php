<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Input;
use App\Note;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function __construct() {
        // only authenticated users can access these page of the controller
        $this->middleware('auth');
    }
    

    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // server-side validation

        // store in the database 
        $note = new Note;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->class = $request->class;
        $note->user = "bobby"; // get user

        // save our note image
        $image = $request->file('note_image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('note_images/' . $filename);
        //Image::make($image)->resize(400,800)->save($location);
        Image::make($image)->save($location);
        $note->images = $filename;
        
        $note->approved = true;
        $note->votes = 0;
        $note->flags = 0;


        $note->save();

        // redirect to the Home page
        return redirect()->action('PagesController@index');
        //return redirect()->route('notes.show', $note->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
