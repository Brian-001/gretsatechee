<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\File;

class ImageController extends Controller
{
    public function index(){
        return  view ('image');
    }

    public function store(Request $request){
        $this->validate($request, ['image => required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);

    $image_path = $request->file('image')->store('image', 'public');
    
    session()->flash('success', 'Image uploaded Successfully');
    return redirect()->route('image.index');
    }
}
