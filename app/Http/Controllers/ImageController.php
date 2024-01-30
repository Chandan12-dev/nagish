<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->file('file')){
            $image = $request->file('file');
            $new_name = time() . '.' . $image->getClientOriginalExtension();
            $location = url('assets/images/').'/'.$new_name;
            $image->move(public_path('assets/images'), $new_name);
            return response()->json(array('url'=> $location), 200);
        }else{
            return response()->json(array('data'=> "File Not Uploaded. Please try again."), 404);
        }
    }
}
