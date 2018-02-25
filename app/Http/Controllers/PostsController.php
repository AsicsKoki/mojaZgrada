<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\Post;
use Redirect;

class PostsController extends Controller
{

    public function __constructor()
    {
        //Middleware admin treba da ima pristup postovima za zgrade koje ima
        //User zgrade treba da moze samo da vidi post bez da menja
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Building $building)
    {
        $posts=$building->posts;

        return view('building.dashboard',compact(['building', 'posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Building $building)
    {
        return view('building.createpost')->with('building',$building);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Building $building, Request $request)
    {
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'building_id' => $building->id
        ]);

        return rediredct("/".$building_.id."posts");
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
