<?php

namespace App\Http\Controllers;

use App\Estate;

class EstatesController extends Controller
{
    public function index()
    {
        $name = 'Nekretnine';
        $estates = Estate::latest()->get();

        return view('estates.index', compact('estates', 'name'));
    }

    public function show(Estate $estate)
    {
        return view('estates.show', compact('estate'));
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|max:100', 
            'body' => 'required|max:255', 
            'city' => 'required|max:50', 
            'city_part' => 'required|max:50', 
            'location' => 'required', 
            'size' => 'required', 
            'price' => 'required', 
            'estate_type' => 'required', 
            'method' => 'required', 
            'equipped' => 'required', 
            'rooms' => 'required', 
            'picture_url' => 'required'
        ]);

        Estate::create(request(
            [  
                'title', 
                'body', 
                'city', 
                'city_part', 
                'location', 
                'size', 
                'price', 
                'estate_type', 
                'method', 
                'equipped', 
                'rooms', 
                'picture_url'
            ]));

        return redirect('/estates');
    }
}
