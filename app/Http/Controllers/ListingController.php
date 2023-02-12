<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Listing;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    public function index(){
        return view('listings.index',[
            'list' => Listing::latest()->filter(request(['tag','search']))->get()
        ]);
    }

    public function show(Listing $list){
         return view('listings.show',[
            'list'=> $list
        ]);
    }

    public function create(){
        return view('listings.create');
    }

    public function store(Request $request){
        $formValid = $request->validate([
            'title'=>'required',
            'company'=>'required',
            'location'=>'required',
            'website'=>'required',
            'email'=>'required',
            'tags'=>'required',
            'descripton'=>'required'
        ]);

        Listing::create($formValid);
        return redirect('/');

    }

}

