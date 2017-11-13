<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Returns the users profile that is associated with the logged in user_id
        return view('user.profile')
            ->withProfile(Profile::where('user_id', $request->user()->id)->first())
            ->withUser($request->user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view('user.createprofile')->withUser($request->user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Creates a profile for the newly registered user
        $user_id = $request->user()->id;
        $name = $request->get('name');
        $age = $request->get('age');
        $location = $request->get('location');
        $pdgaNumber = $request->get('pdgaNumber');
        $sponsor = $request->get('sponsor');

        //Saving all the above data into our MySql Database
        $user_profile=new Profile ([
            'user_id'=>             $user_id, 
            'name'=>                $name, 
            'age'=>                 $age,             
            'location'=>            $location, 
            'pdgaNumber'=>          $pdgaNumber, 
            'sponsor'=>             $sponsor
        
        ]);
        $user_profile->save();
        
        return redirect()->action("ProfileController@index");
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
